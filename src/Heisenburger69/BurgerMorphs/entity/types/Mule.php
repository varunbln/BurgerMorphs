<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Mule extends MorphEntity
{

    public const NETWORK_ID = self::MULE;

    public $width = 1.3965;
    public $height = 1.6;


    public function getName(): string
    {
        return "Mule";
    }

}