<?php

namespace Heisenburger69\BurgerMorphs\commands;

use Heisenburger69\BurgerMorphs\session\SessionManager;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;

class MorphCommand extends Command
{

    public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
        $this->setPermission("burgermorphs.morph");
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
        if (!$sender instanceof Player) {
            $sender->sendMessage(C::RED . "This command can only be used in-game!");
            return;
        }
        if (!isset($args[0])) {
            $sender->sendMessage(C::RED . "Do /morph <type/reset>");
            return;
        }
        $session = SessionManager::getSessionByPlayer($sender);
        if ($session === null) {
            $sender->sendMessage(C::DARK_RED . "An unexpected error has occurred, contact a server admin.");
            return;
        }
        if ($args[0] === "reset") {
            if ($session->unMorph()) {
                $sender->sendMessage(C::GREEN . "Successfully unmorphed!");
            } else {
                $sender->sendMessage(C::RED . "You are currently not morphed!");
            }
            return;
        }
        if ($session->morph($args[0])) {
            $sender->sendMessage(C::GREEN . "Successfully morphed into a {$args[0]}!");
        } else {
            $sender->sendMessage(C::RED . "Given morph could not be found!");
        }
    }
}