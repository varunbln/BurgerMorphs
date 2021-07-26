<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Enderman extends MorphEntity {

    public const NETWORK_ID = self::ENDERMAN;

    public $width = 0.3;
    /** @var float */
    public $length = 0.9;
    public $height = 1.8;

    public function getName(): string{
        return "Enderman";
    }
}