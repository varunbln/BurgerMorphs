<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Ocelot extends MorphEntity
{

    public const NETWORK_ID = self::OCELOT;

    public $width = 0.6;
    public $height = 0.7;

    public function getName(): string
    {
        return "Ocelot";
    }

}