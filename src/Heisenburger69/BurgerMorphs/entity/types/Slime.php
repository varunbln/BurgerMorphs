<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Slime extends MorphEntity
{

    public const NETWORK_ID = self::SLIME;

    public $width = 2.04;
    public $height = 2.04;

    public function getName(): string
    {
        return "Slime";
    }
}