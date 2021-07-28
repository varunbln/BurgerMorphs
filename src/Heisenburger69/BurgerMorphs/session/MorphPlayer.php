<?php

namespace Heisenburger69\BurgerMorphs\session;

use Heisenburger69\BurgerMorphs\entity\EntityManager;
use Heisenburger69\BurgerMorphs\entity\MorphEntity;
use Heisenburger69\BurgerMorphs\Main;
use pocketmine\network\mcpe\protocol\MoveActorAbsolutePacket;
use pocketmine\Player;
use pocketmine\scheduler\ClosureTask;
use pocketmine\scheduler\TaskHandler;
use pocketmine\Server;
use function count;
use function var_dump;

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
     * @var array
     */
    private array $queuedPackets = [];

    /**
     * @var TaskHandler|null
     */
    private ?TaskHandler $handler = null;

    /**
     * MorphPlayer constructor.
     * @param Player $player
     */
    public function __construct(Player $player)
    {
        $this->player = $player;
        $task = new ClosureTask(function (int $currentTick) use ($player): void
        {
            $session = SessionManager::getSessionByPlayer($player);
            $session->sendQueuedPackets();
        });
        $this->handler = $task->getHandler();
        Main::getInstance()->getScheduler()->scheduleRepeatingTask($task, 1);
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
        $this->unMorph();
        $entity = EntityManager::createMorphEntity($this->player, $type);
        if (!$entity instanceof MorphEntity) return false;
        foreach (Server::getInstance()->getOnlinePlayers() as $player) {
            if ($player->getName() !== $this->player->getName()) {
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
        if ($this->morphEntity === null) return false;
        $this->morphEntity->flagForDespawn();
        foreach (Server::getInstance()->getOnlinePlayers() as $player) {
            if ($player->getName() !== $this->player->getName()) {
                $player->showPlayer($this->player);
            }
        }
        $this->morphEntity = null;
        return true;
    }

    public function isMorphed(): bool
    {
        return $this->morphEntity !== null;
    }

    public function sendQueuedPackets(): void
    {
        if(count($this->queuedPackets) > 0) Server::getInstance()->batchPackets($this->getMorphEntity()->getViewers(), $this->queuedPackets);
        $this->queuedPackets = [];
    }

    public function addPacketToQueue(MoveActorAbsolutePacket $pk): void
    {
        $this->queuedPackets[] = $pk;
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

    public function __destruct()
    {
        if($this->handler !== null) $this->handler->cancel();
    }
}