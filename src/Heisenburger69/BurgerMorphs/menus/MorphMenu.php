<?php

namespace Heisenburger69\BurgerMorphs\menus;

use Heisenburger69\BurgerMorphs\libs\jojoe77777\FormAPI\Form;
use Heisenburger69\BurgerMorphs\libs\jojoe77777\FormAPI\SimpleForm;
use pocketmine\Player;

class MorphMenu
{
    private static function getForm(Player $player): Form
    {
        $form = new SimpleForm();
        return $form;
    }

    public static function send(Player $player): void
    {
        $player->sendForm(self::getForm($player));
    }
}