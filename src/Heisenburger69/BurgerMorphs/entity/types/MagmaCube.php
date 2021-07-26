<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class MagmaCube extends MorphEntity
{

    public const NETWORK_ID = self::MAGMA_CUBE;

    public $width = 2.04;
    public $height = 2.04;

    public function getName(): string
    {
        return "Magma Cube";
    }
}