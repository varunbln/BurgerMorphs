<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Horse extends MorphEntity
{

    public $width = 2;
    public $height = 3;

    public const NETWORK_ID = self::HORSE;

    public function getName(): string
    {
        return "Horse";
    }
}