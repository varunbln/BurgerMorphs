<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class WitherSkeleton extends Skeleton {

    public const NETWORK_ID = self::WITHER_SKELETON;

    public $width = 0.7;
    public $height = 2.4;

    public function getName(): string{
        return "Wither Skeleton";
    }
}