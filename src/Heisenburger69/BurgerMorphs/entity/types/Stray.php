<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

class Stray extends Skeleton
{

    public const NETWORK_ID = self::STRAY;

    public function getName(): string
    {
        return "Stray";
    }
}