<?php


namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class ElderGuardian extends MorphEntity
{

    public const NETWORK_ID = self::ELDER_GUARDIAN;

    public $width = 1.9975;
    public $height = 1.9975;

    public function getName(): string
    {
        return "Elder Guardian";
    }
}