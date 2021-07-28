<?php

namespace Heisenburger69\BurgerMorphs\entity;

use Heisenburger69\BurgerMorphs\Main;
use pocketmine\entity\Entity;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\Player;

class MorphEntity extends Entity
{
    /**
     * @var Player
     */
    private Player $player;

    public function __construct(Level $level, CompoundTag $nbt, Player $player, bool $dinnerbone, bool $baby)
    {
        parent::__construct($level, $nbt);
        $this->player = $player;
        if ($dinnerbone) {
            $this->setNameTagVisible(false);
            $this->setNameTag("Dinnerbone");
        }
        if(Main::getInstance()->getConfig()->getNested("entity.nametags")) {
            $this->setNameTagVisible(true);
            $this->setNameTagAlwaysVisible(true);
            $this->setNameTag($this->player->getNameTag());
        }
        $this->getDataPropertyManager()->setFloat(self::DATA_BOUNDING_BOX_WIDTH, $player->getDataPropertyManager()->getFloat(self::DATA_BOUNDING_BOX_WIDTH));
        $this->getDataPropertyManager()->setFloat(self::DATA_BOUNDING_BOX_HEIGHT, $player->getDataPropertyManager()->getFloat(self::DATA_BOUNDING_BOX_HEIGHT));
        if ($baby) $this->setScale($this->getScale() / Main::getInstance()->getConfig()->getNested("entity.baby"));
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