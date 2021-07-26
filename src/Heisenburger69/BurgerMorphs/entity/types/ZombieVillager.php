<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use pocketmine\entity\Zombie;
use function mt_rand;

class ZombieVillager extends Zombie
{

    public const NETWORK_ID = self::ZOMBIE_VILLAGER;

    public $width = 0.6;
    public $height = 1.95;

    public function getName(): string
    {
        return "Zombie Villager";
    }
}