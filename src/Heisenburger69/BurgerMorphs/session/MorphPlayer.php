<?php

namespace Heisenburger69\BurgerMorphs\session;

use Heisenburger69\BurgerMorphs\entity\EntityManager;
use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use pocketmine\Player;
use pocketmine\Server;

class MorphPlayer
{
    /**
     * @var Player
     */
    private Player $player;

    /**
     * @var MorphEntity
     */
    private ?MorphEntity $morphEntity = null;

    /**
     * MorphPlayer constructor.
     * @param Player $player
     */
    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param string $type
     * @return bool
     */
    public function morph(string $type): bool
    {
        $entity = EntityManager::createMorphEntity($this->player, $type);
        if(!$entity instanceof MorphEntity) return false;
        foreach (Server::getInstance()->getOnlinePlayers() as $player) {
            if($player->getName() !== $this->player->getName()) {
                $entity->spawnTo($player);
                $player->hidePlayer($this->player);
            }
        }
        $this->morphEntity = $entity;
        return true;
    }

    /**
     * @return bool
     */
    public function unMorph(): bool
    {
        if($this->morphEntity === null) return false;
        $this->player->teleport($this->morphEntity);
        $this->morphEntity->flagForDespawn();
        foreach (Server::getInstance()->getOnlinePlayers() as $player) {
            if($player->getName() !== $this->player->getName()) {
                $player->showPlayer($this->player);
            }
        }
        $this->morphEntity = null;
        return true;
    }

    /**
     * @return MorphEntity|null
     */
    public function getMorphEntity(): ?MorphEntity
    {
        return $this->morphEntity;
    }

    /**
     * @param MorphEntity $morphEntity
     */
    private function setMorphEntity(MorphEntity $morphEntity): void
    {
        $this->morphEntity = $morphEntity;
    }
}