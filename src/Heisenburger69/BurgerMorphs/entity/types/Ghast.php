<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Ghast extends MorphEntity {

    public const NETWORK_ID = self::GHAST;

    public $width = 6;
    /** @var int */
    public $length = 6;
    public $height = 6;

    public function getName(): string{
        return "Ghast";
    }
}