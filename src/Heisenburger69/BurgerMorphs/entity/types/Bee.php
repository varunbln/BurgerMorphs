<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use Heisenburger69\BurgerMorphs\pocketmine\AddActorPacket;
use pocketmine\Player;

class Bee extends MorphEntity
{

    public const NETWORK_ID = 122;

    public $width = 0.6;
    public $height = 0.6;

    public function getName(): string
    {
        return "Bee";
    }

    protected function sendSpawnPacket(Player $player): void
    {
        $pk = new AddActorPacket();
        $pk->entityRuntimeId = $this->getId();
        $pk->type = "minecraft:bee";
        $pk->position = $this->asVector3();
        $pk->motion = $this->getMotion();
        $pk->yaw = $this->yaw;
        $pk->headYaw = $this->yaw; //TODO
        $pk->pitch = $this->pitch;
        $pk->attributes = $this->attributeMap->getAll();
        $pk->metadata = $this->propertyManager->getAll();

        $player->dataPacket($pk);
    }
}