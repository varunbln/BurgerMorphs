<?php

namespace Heisenburger69\BurgerMorphs\menus;

use Heisenburger69\BurgerMorphs\libs\jojoe77777\FormAPI\Form;
use Heisenburger69\BurgerMorphs\libs\jojoe77777\FormAPI\SimpleForm;
use Heisenburger69\BurgerMorphs\Main;
use Heisenburger69\BurgerMorphs\session\SessionManager;
use Heisenburger69\BurgerMorphs\utils\Utils;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use function str_replace;
use function ucfirst;

class MorphMenu
{
    private static function getForm(Player $player): Form
    {
        $form = new SimpleForm(function (Player $player, ?string $data): void
        {
            if($data === null) return;
            $session = SessionManager::getSessionByPlayer($player);
            if($session === null) {
                $player->sendMessage(C::RED . "An unknown error has occurred. Please contact an admin.");
                return;
            }
            if($data === "reset") {
                $player->sendMessage(C::colorize(Main::getInstance()->getConfig()->getNested("messages.unmorph")));
                $session->unMorph();
                return;
            }
            if(!$player->hasPermission("burgermorphs.$data") && !$player->hasPermission("burgermorphs.all")) {
                $player->sendMessage(C::RED . "You do not have permission to use this Morph!");
                return;
            }
            if($session->morph($data)) {
                $player->sendMessage(str_replace("{morph}", Utils::formatMorphId($data), C::colorize(Main::getInstance()->getConfig()->getNested("messages.morph"))));
            } else {
                $player->sendMessage(C::RED . "Given morph not found!");
            }
        });
        $form->setTitle(C::BOLD . C::AQUA . "Burger" . C::LIGHT_PURPLE . "Morphs");
        $form->setContent(C::colorize(Main::getInstance()->getConfig()->getNested("messages.form")));
        $form->addButton(C::RED . C::BOLD . "RESET", -1, "", "reset");
        foreach (Utils::getAllowedMorphs($player) as $morph) {
            $form->addButton(C::BLUE . Utils::formatMorphId($morph), -1, "", $morph);
        }
        return $form;
    }

    public static function send(Player $player): void
    {
        $player->sendForm(self::getForm($player));
    }
}