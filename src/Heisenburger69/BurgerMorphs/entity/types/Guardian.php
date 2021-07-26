<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class Guardian extends MorphEntity
{

    public const NETWORK_ID = self::GUARDIAN;

    public $width = 0.85;
    public $height = 0.85;

    public function getName(): string
    {
        return "Guardian";
    }
}