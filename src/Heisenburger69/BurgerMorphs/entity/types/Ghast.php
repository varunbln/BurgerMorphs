<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Ghast extends MorphEntity
{

    public const NETWORK_ID = self::GHAST;

    public $width = 6;
    /** @var int */
    public $length = 6;
    public $height = 6;

    public function getName(): string
    {
        return "Ghast";
    }
}