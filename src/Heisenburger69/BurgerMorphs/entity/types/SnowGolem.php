<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class SnowGolem extends MorphEntity
{

    public const NETWORK_ID = self::SNOW_GOLEM;
    public const TAG_PUMPKIN = "Pumpkin";

    public $width = 0.7;
    public $height = 1.9;


    public function getName(): string
    {
        return "Snow Golem";
    }
}