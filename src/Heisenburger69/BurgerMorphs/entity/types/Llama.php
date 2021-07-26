<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use Heisenburger69\BurgerMorphs\entity\MorphEntity;

class Llama extends MorphEntity
{
    public const NETWORK_ID = self::LLAMA;

    const WHITE = 1;

    public $width = 0.9;
    public $height = 1.87;

    public function getName(): string
    {
        return "Llama";
    }
}