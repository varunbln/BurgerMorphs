<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Blaze extends MorphEntity
{

    public const NETWORK_ID = self::BLAZE;

    public $width = 0.6;
    public $height = 1.8;

    public function getName(): string
    {
        return "Blaze";
    }

}