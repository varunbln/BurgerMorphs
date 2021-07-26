<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Spider extends MorphEntity
{

    public const NETWORK_ID = self::SPIDER;

    public $width = 1.4;
    public $height = 0.9;

    public function getName(): string
    {
        return "Spider";
    }
}