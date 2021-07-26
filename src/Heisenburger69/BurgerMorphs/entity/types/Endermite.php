<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Endermite extends MorphEntity
{

    public const NETWORK_ID = self::ENDERMITE;

    public $height = 0.3;
    public $width = 0.4;

    public function getName(): string
    {
        return "Endermite";
    }
}