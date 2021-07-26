<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Pig extends MorphEntity {

    public const NETWORK_ID = self::PIG;

    public $width = 0.9;
    public $height = 0.9;

    public function getName(): string{
        return "Pig";
    }
}