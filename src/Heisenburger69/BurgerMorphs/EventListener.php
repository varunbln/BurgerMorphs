<?php

namespace Heisenburger69\BurgerMorphs;

use Heisenburger69\BurgerMorphs\session\SessionManager;
use Heisenburger69\BurgerMorphs\utils\PacketHandler;
use Heisenburger69\BurgerMorphs\utils\Utils;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\server\DataPacketSendEvent;
use pocketmine\network\mcpe\protocol\MoveActorAbsolutePacket;
use pocketmine\network\mcpe\protocol\MoveActorDeltaPacket;
use pocketmine\network\mcpe\protocol\MovePlayerPacket;
use function var_dump;

class EventListener implements Listener
{
    public function onJoin(PlayerJoinEvent $event): void
    {
        SessionManager::startSession($event->getPlayer());
    }

    public function onQuit(PlayerQuitEvent $event): void
    {
        SessionManager::endSession($event->getPlayer());
    }

    public function onDataPacketReceive(DataPacketReceiveEvent $event): void
    {
        $pk = $event->getPacket();
        if($pk instanceof MovePlayerPacket) {
            $player = $event->getPlayer();
            $session = SessionManager::getSessionByPlayer($player);
            if($session === null) return;
            if($session->getMorphEntity() === null) return;
            $event->setCancelled();
            PacketHandler::sendMovePacket($session->getMorphEntity(), $pk);
        }
    }
}