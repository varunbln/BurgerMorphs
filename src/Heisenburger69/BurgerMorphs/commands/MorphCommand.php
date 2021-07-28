<?php

namespace Heisenburger69\BurgerMorphs\commands;

use Heisenburger69\BurgerMorphs\menus\MorphMenu;
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
        if(!$sender instanceof Player) {
            $sender->sendMessage(C::RED . "This command must be run ingame!");
            return;
        }
        MorphMenu::send($sender);
    }
}