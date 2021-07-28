<?php

namespace Heisenburger69\BurgerMorphs\commands;

use Heisenburger69\BurgerMorphs\session\SessionManager;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;

class AdminMorphCommand extends Command
{

    public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
        $this->setPermission("burgermorphs.adminmorph");
    }

    /**
     * @param CommandSender $sender
     * @param string $commandLabel
     * @param array $args
     */
    public function execute(CommandSender $sender, string $commandLabel, array $args): void
    {
        if (!$sender->hasPermission($this->getPermission())) {
            $sender->sendMessage(C::RED . "Insufficient Permission.");
            return;
        }
        if (!isset($args[0]) || !isset($args[1])) {
            $sender->sendMessage(C::RED . "Do /morph <player> <type/reset>");
            return;
        }
        if(($player = Server::getInstance()->getPlayerExact($args[0])) === null) {
            $sender->sendMessage(C::RED . "The given player is offline!");
            return;
        }
        $session = SessionManager::getSessionByPlayer($player);
        if ($session === null) {
            $sender->sendMessage(C::DARK_RED . "An unexpected error has occurred, report it on the Github repo.");
            return;
        }
        if ($args[1] === "reset") {
            $session->unMorph();
            $sender->sendMessage(C::GREEN . "Successfully unmorphed {$player->getName()}!");
            return;
        }
        if ($session->morph($args[1])) {
            $sender->sendMessage(C::GREEN . "Successfully morphed {$player->getName()} into a {$args[1]}!");
        } else {
            $sender->sendMessage(C::RED . "Given morph could not be found!");
        }
    }
}