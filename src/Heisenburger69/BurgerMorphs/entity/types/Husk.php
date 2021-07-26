<?php

namespace Heisenburger69\BurgerMorphs\entity\types;

use pocketmine\entity\Zombie;

class Husk extends Zombie {

    public const NETWORK_ID = self::HUSK;

    public function getName(): string{
        return "Husk";
    }
}