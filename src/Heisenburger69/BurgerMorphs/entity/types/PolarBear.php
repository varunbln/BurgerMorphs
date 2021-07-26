<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class PolarBear extends MorphEntity
{

    public const NETWORK_ID = self::POLAR_BEAR;

    public $width = 1.3;
    public $height = 1.4;

    public function getName(): string
    {
        return "Polar Bear";
    }

    public function initEntity(): void
    {
        $this->setMaxHealth(30);
        parent::initEntity();
    }
}