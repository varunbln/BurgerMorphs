<?php

namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Shulker extends MorphEntity {

    public const NETWORK_ID = self::SHULKER;

    public $width = 1;
    public $height = 1;

    public function getName(): string{
        return "Shulker";
    }
}