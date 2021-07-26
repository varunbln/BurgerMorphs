<?php


namespace Heisenburger69\BurgerMorphs\entity\types;


use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use function mt_rand;


class CaveSpider extends MorphEntity
{

    public const NETWORK_ID = self::CAVE_SPIDER;

    public $width = 1;
    /** @var int */
    public $length = 1;
    public $height = 0.5;

    public function getName(): string{
        return "Cave Spider";
    }
}