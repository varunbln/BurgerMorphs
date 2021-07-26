<?php


namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Creeper extends MorphEntity
{

    public const NETWORK_ID = self::CREEPER;

    public $height = 1.7;
    public $width = 0.6;


    public function getName(): string
    {
        return "Creeper";
    }

}