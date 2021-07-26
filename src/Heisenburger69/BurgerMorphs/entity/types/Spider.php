<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use function mt_rand;

class Spider extends MorphEntity {

    public const NETWORK_ID = self::SPIDER;

    public $width = 1.4;
    public $height = 0.9;

    public function getName(): string{
        return "Spider";
    }
}