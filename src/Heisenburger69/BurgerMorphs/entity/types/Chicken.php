<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Chicken extends MorphEntity
{

    public const NETWORK_ID = self::CHICKEN;

    public $width = 0.6;
    /** @var float */
    public $length = 0.6;
    public $height = 0;


    public function getName(): string
    {
        return "Chicken";
    }

}