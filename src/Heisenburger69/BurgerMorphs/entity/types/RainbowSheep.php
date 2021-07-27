<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\Player;

class RainbowSheep extends Sheep
{

    public function __construct(Level $level, CompoundTag $nbt, Player $player, bool $dinnerbone)
    {
        parent::__construct($level, $nbt, $player, $dinnerbone);
        $this->setNameTagVisible(false);
        $this->setNameTag("jeb_");
    }

    public function getName(): string
    {
        return "Sheep";
    }
}