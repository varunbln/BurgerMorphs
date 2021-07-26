<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class IronGolem extends MorphEntity
{

    public const NETWORK_ID = self::IRON_GOLEM;

    public $width = 1.4;
    public $height = 2.7;

    public function getName(): string
    {
        return "Iron Golem";
    }
}