<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Guardian extends MorphEntity
{

    public const NETWORK_ID = self::GUARDIAN;

    public $width = 0.85;
    public $height = 0.85;

    public function getName(): string
    {
        return "Guardian";
    }
}