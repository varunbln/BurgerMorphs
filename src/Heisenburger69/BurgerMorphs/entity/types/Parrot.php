<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Parrot extends MorphEntity {

    public const NETWORK_ID = self::PARROT;

    public $height = 0.9;
    public $width = 0.5;

    public function getName(): string{
        return "Parrot";
    }
}