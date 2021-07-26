<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Parrot extends MorphEntity
{

    public const NETWORK_ID = self::PARROT;

    public $height = 0.9;
    public $width = 0.5;

    public function getName(): string
    {
        return "Parrot";
    }
}