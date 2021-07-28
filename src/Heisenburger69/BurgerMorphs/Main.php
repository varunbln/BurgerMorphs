<?php

declare(strict_types=1);

namespace Heisenburger69\BurgerMorphs;

use Heisenburger69\BurgerMorphs\commands\AdminMorphCommand;
use Heisenburger69\BurgerMorphs\commands\MorphCommand;
use Heisenburger69\BurgerMorphs\entity\EntityManager;
use Heisenburger69\BurgerMorphs\session\SessionManager;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    /**
     * @var Main
     */
    private static Main $instance;

    /**
     * @return Main
     */
    public static function getInstance(): Main
    {
        return self::$instance;
    }

    public function onEnable()
    {
        self::$instance = $this;
        EntityManager::init();
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getServer()->getCommandMap()->registerAll("burgermorphs",
            [
                new AdminMorphCommand("adminmorph", "Manage a player's morph!"),
                new MorphCommand("morph", "Morph into an entity!", null, ["burgermorph"]),
            ]);
    }

    public function onDisable()
    {
        SessionManager::endAllSessions();
    }
}
