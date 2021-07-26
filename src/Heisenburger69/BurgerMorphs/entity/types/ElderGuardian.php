<?php


namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class ElderGuardian extends MorphEntity {

    public const NETWORK_ID = self::ELDER_GUARDIAN;

    public $width = 1.9975;
    public $height = 1.9975;

    public function getName(): string{
        return "Elder Guardian";
    }
}