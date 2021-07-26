<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Bat extends MorphEntity
{
    const NETWORK_ID = self::BAT;

    public $width = 0.5;
    public $height = 0.9;

    public function getName(): string
    {
        return "Bat";
    }
}