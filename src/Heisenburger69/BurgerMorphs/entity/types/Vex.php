<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;use function mt_rand;

class Vex extends MorphEntity {

    public const NETWORK_ID = self::VEX;

    public $width = 0.4;
    public $height = 0.8;

    public function getName(): string{
        return "Vex";
    }
}