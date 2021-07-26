<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Witch extends MorphEntity
{

    public const NETWORK_ID = self::WITCH;

    public $width = 0.6;
    public $height = 1.95;

    public function getName(): string
    {
        return "Witch";
    }
}