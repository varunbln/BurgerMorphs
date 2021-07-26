<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Vindicator extends MorphEntity
{

    public const NETWORK_ID = self::VINDICATOR;

    public $width = 0.6;
    public $height = 1.95;


    public function getName(): string
    {
        return "Vindicator";
    }
}