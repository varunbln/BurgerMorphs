<?php

namespace Heisenburger69\BurgerMorphs;

use Heisenburger69\BurgerMorphs\session\MorphPlayer;
use Heisenburger69\BurgerMorphs\session\SessionManager;
use Heisenburger69\BurgerMorphs\utils\PacketHandler;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\MovePlayerPacket;

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
            PacketHandler::sendMovePacket($session->getMorphEntity(), $pk);
        }
    }
}