<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Turtle extends MorphEntity
{
    public const NETWORK_ID = self::TURTLE;

    public $width = 1.2;
    public $height = 0.4;

    public function getName(): string
    {
        return "Turtle";
    }
}