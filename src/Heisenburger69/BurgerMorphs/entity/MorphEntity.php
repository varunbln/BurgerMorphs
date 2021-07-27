<?php

namespace Heisenburger69\BurgerMorphs\entity;

use pocketmine\entity\Entity;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\Player;
use function var_dump;

class MorphEntity extends Entity
{
    /**
     * @var Player
     */
    private Player $player;

    public function __construct(Level $level, CompoundTag $nbt, Player $player, bool $dinnerbone)
    {
        parent::__construct($level, $nbt);
        $this->player = $player;
        if($dinnerbone) {
            $this->setNameTagVisible(false);
            $this->setNameTag("Dinnerbone");
        }
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function canSaveWithChunk(): bool
    {
        return false;
    }

    protected function broadcastMotion(): void
    {

    }
}