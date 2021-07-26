<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Mule extends MorphEntity {

    public const NETWORK_ID = self::MULE;

    public $width = 1.3965;
    public $height = 1.6;


    public function getName(): string{
        return "Mule";
    }

}