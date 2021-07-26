<?php


namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Cow extends MorphEntity
{

    public const NETWORK_ID = self::COW;

    public $width = 0.9;
    public $height = 1.3;

    public function getName(): string
    {
        return "Cow";
    }
}