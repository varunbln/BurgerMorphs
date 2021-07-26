<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\Player;

class Mooshroom extends MorphEntity {

    public const NETWORK_ID = self::MOOSHROOM;

    public $width = 0.9;
    public $height = 1.4;

    public function getName(): string{
        return "Mooshroom";
    }
}