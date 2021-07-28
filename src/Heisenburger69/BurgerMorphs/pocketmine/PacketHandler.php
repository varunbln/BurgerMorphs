<?php

namespace Heisenburger69\BurgerMorphs\pocketmine;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\network\mcpe\protocol\BatchPacket;
use pocketmine\network\mcpe\protocol\MoveActorAbsolutePacket;
use pocketmine\network\mcpe\protocol\MovePlayerPacket;

class PacketHandler
{
    public static function getMovePacket(MorphEntity $entity, MovePlayerPacket $originalPacket): MoveActorAbsolutePacket
    {
        $pk = new MoveActorAbsolutePacket();
        $pk->entityRuntimeId = $entity->getId();
        $pk->position = $originalPacket->position->subtract(0, 1.6, 0);
        $pk->xRot = $originalPacket->pitch;
        $pk->yRot = $originalPacket->yaw;
        $pk->zRot = $originalPacket->yaw;
        if ($originalPacket->mode === MovePlayerPacket::MODE_TELEPORT) {
            $pk->flags |= MoveActorAbsolutePacket::FLAG_TELEPORT;
        }
        return $pk;
    }
}