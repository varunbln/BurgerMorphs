<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class ZombiePigman extends MorphEntity
{

    public const NETWORK_ID = self::ZOMBIE_PIGMAN;

    public $width = 0.6;
    public $height = 1.95;

    public function getName(): string
    {
        return "Zombie Pigman";
    }
}