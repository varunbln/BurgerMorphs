<?php

namespace Heisenburger69\BurgerMorphs\entity;

use pocketmine\entity\Entity;
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\protocol\SetActorLinkPacket;
use pocketmine\network\mcpe\protocol\types\EntityLink;
use pocketmine\Player;

class MorphEntity extends Entity
{
    /**
     * @var Player
     */
    private Player $player;

    public function __construct(Level $level, CompoundTag $nbt, Player $player)
    {
        parent::__construct($level, $nbt);
        $this->player = $player;
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

//    protected function sendSpawnPacket(Player $player) : void{
//        parent::sendSpawnPacket($player);
//        if($this->player !== null && $player === $this->player){
//            $pk = new SetActorLinkPacket();
//            $pk->link = new EntityLink($player->getId(), $this->getId(), EntityLink::TYPE_RIDER, true, false);
//            $this->setGenericFlag(self::DATA_FLAG_RIDING, false);
//            $player->sendDataPacket($pk);
//        }
//    }
//
//    protected function updateMovement(bool $teleport = true) : void{
//        if($this->player === null) return;
//        $this->setPositionAndRotation($this->player, $this->player->getYaw(), $this->player->getPitch());
//        parent::updateMovement($teleport);
//    }
}