<?php

namespace Heisenburger69\BurgerMorphs;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use Heisenburger69\BurgerMorphs\session\MorphPlayer;
use Heisenburger69\BurgerMorphs\session\SessionManager;
use Heisenburger69\BurgerMorphs\pocketmine\PacketHandler;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\MovePlayerPacket;
use pocketmine\Player;

class EventListener implements Listener
{
    public function onJoin(PlayerJoinEvent $event): void
    {
        $player = $event->getPlayer();
        foreach (SessionManager::getAllSessions() as $session) {
            /** @var MorphPlayer $session */
            if($session->getMorphEntity() !== null) $player->hidePlayer($session->getPlayer());
        }
        SessionManager::startSession($player);
    }

    public function onQuit(PlayerQuitEvent $event): void
    {
        SessionManager::endSession($event->getPlayer());
    }

    public function onDataPacketReceive(DataPacketReceiveEvent $event): void
    {
        $pk = $event->getPacket();
        if ($pk instanceof MovePlayerPacket) {
            $player = $event->getPlayer();
            $session = SessionManager::getSessionByPlayer($player);
            if ($session === null) return;
            if ($session->getMorphEntity() === null) return;
            $session->addPacketToQueue(PacketHandler::getMovePacket($session->getMorphEntity(), $pk));
        }
    }

    /**
     * @param EntityDamageByEntityEvent $event
     * @priority MONITOR
     */
    public function onAttacked(EntityDamageByEntityEvent $event): void
    {
        if($event->isCancelled()) return;
        $attacked = $event->getEntity();
        $attacker = $event->getDamager();
        if($attacked instanceof MorphEntity) {
            $player = $attacked->getPlayer();
            $session = SessionManager::getSessionByPlayer($player);
            if(Main::getInstance()->getConfig()->getNested("pvp.disable-attacked")) {
                if($attacker instanceof Player) $attacker->sendMessage(C::colorize(Main::getInstance()->getConfig()->getNested("messages.morph-attacked")));
                $event->setCancelled();
                return;
            }
            if(Main::getInstance()->getConfig()->getNested("pvp.unmorph-on-attack")) {
                $session->unMorph();
                $player->attack(new EntityDamageByEntityEvent($attacker, $player, $event->getCause(), $event->getBaseDamage(), $event->getModifiers(), $event->getKnockBack()));
                return;
            }
        }
        if($attacker instanceof Player) {
            $session = SessionManager::getSessionByPlayer($attacker);
            if($session->isMorphed() && Main::getInstance()->getConfig()->getNested("pvp.disable-attacking")) {
                $attacker->sendMessage(C::colorize(Main::getInstance()->getConfig()->getNested("messages.morph-attacking")));
                $event->setCancelled();
                return;
            }
            if(Main::getInstance()->getConfig()->getNested("pvp.unmorph-on-attack")) {
                $session->unMorph();
                return;
            }
        }
    }
}