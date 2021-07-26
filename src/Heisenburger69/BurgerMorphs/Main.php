<?php

declare(strict_types=1);

namespace Heisenburger69\BurgerMorphs;

use Heisenburger69\BurgerMorphs\commands\MorphCommand;
use Heisenburger69\BurgerMorphs\entity\EntityManager;
use Heisenburger69\BurgerMorphs\session\SessionManager;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable()
    {
        EntityManager::init();
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getServer()->getCommandMap()->registerAll("burgermorphs",
            [
                new MorphCommand("morph", "Morph into an entity!"),
            ]);
    }

    public function onDisable()
    {
        SessionManager::endAllSessions();
    }
}
