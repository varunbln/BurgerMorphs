<?php


namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;


class CaveSpider extends MorphEntity
{

    public const NETWORK_ID = self::CAVE_SPIDER;

    public $width = 1;
    /** @var int */
    public $length = 1;
    public $height = 0.5;

    public function getName(): string
    {
        return "Cave Spider";
    }
}