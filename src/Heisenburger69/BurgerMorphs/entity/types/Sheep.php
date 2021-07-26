<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\Player;
use function mt_rand;

class Sheep extends MorphEntity {

    public const NETWORK_ID = self::SHEEP;

    public $width = 0.9;
    public $height = 1.3;

    public function getName(): string{
        return "Sheep";
    }
}
