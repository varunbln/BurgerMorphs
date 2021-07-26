<?php

namespace Heisenburger69\BurgerMorphs\entity;

use Heisenburger69\BurgerMorphs\entity\types\Zombie;
use Heisenburger69\BurgerMorphs\utils\Utils;
use pocketmine\entity\Entity;
use pocketmine\Player;

class EntityManager
{
    public static function init(): void
    {
        Entity::registerEntity(Zombie::class, false, ["morph_zombie"]);
    }

    /**
     * @param Player $player
     * @param string $morphName
     * @return Entity|null
     */
    public static function createMorphEntity(Player $player, string $morphName): ?Entity
    {
        return Entity::createEntity(Utils::convertTypeToMorphSaveId($morphName), $player->level, Entity::createBaseNBT($player, null, $player->getYaw(), $player->getPitch()), $player);
    }
}