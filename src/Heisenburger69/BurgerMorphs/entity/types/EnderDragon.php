<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class EnderDragon extends MorphEntity
{
    const NETWORK_ID = self::ENDER_DRAGON;

    public $width = 8;
    public $height = 16;

    public function initEntity(): void
    {
        $this->setMaxHealth(10000);
        $this->setHealth(10000);
        parent::initEntity();
    }

    public function getName(): string
    {
        return "Ender Dragon";
    }
}