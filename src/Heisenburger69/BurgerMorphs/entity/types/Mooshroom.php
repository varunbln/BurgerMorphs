<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Mooshroom extends MorphEntity
{

    public const NETWORK_ID = self::MOOSHROOM;

    public $width = 0.9;
    public $height = 1.4;

    public function getName(): string
    {
        return "Mooshroom";
    }
}