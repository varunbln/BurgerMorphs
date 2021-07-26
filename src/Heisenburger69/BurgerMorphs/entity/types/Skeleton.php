<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Skeleton extends MorphEntity {

    public const NETWORK_ID = self::SKELETON;

    public $height = 1.99;
    public $width = 0.6;

    public function getName(): string{
        return "Skeleton";
    }

}