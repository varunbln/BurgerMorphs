<?php


namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use function mt_rand;

class Panda extends MorphEntity
{

    public const NETWORK_ID = self::PANDA;

    public $width = 1.2;
    public $height = 1.2;
  

    public function getName(): string
    {
        return "Panda";
    }
}