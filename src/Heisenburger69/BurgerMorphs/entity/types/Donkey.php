<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Donkey extends MorphEntity
{

    public const NETWORK_ID = self::DONKEY;

    public $width = 0.3;
    /** @var float */
    public $length = 0.9;
    public $height = 0;

    public function getName(): string
    {
        return "Donkey";
    }
}