<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use pocketmine\block\Block;
use pocketmine\block\SnowLayer;
use Heisenburger69\BurgerMorphs\entity\MorphEntity;use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\item\Item;
use pocketmine\item\Shears;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\ByteTag;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class SnowGolem extends MorphEntity {

    public const NETWORK_ID = self::SNOW_GOLEM;
    public const TAG_PUMPKIN = "Pumpkin";

    public $width = 0.7;
    public $height = 1.9;
  

    public function getName(): string{
        return "Snow Golem";
    }
}