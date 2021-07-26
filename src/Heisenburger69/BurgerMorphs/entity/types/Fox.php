<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use Heisenburger69\BurgerMorphs\pocketmine\AddActorPacket;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\Player;
use function mt_rand;

class Fox extends MorphEntity
{

    public const NETWORK_ID = 121;

    public $width = 0.7;
    public $height = 0.6;

    public function getName(): string
    {
        return "Fox";
    }

    protected function sendSpawnPacket(Player $player): void
    {
        $pk = new AddActorPacket();
        $pk->entityRuntimeId = $this->getId();
        $pk->type = "minecraft:fox";
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