<?php

namespace Heisenburger69\BurgerMorphs\session;

use pocketmine\Player;
use pocketmine\Server;
use function array_merge;
use function strtolower;

class SessionManager
{
    /** @var array */
    public static array $sessions = [];

    /**
     * @param Player $player
     */
    public static function startSession(Player $player): void
    {
        $crystalPlayer = new MorphPlayer($player);
        self::$sessions = array_merge(self::$sessions, [strtolower($crystalPlayer->getPlayer()->getName()) => $crystalPlayer]);
    }

    /**
     * @return array
     */
    public static function getAllSessions(): array
    {
        return self::$sessions;
    }

    /**
     * @param string $playerName
     * @return MorphPlayer|null
     */
    public static function getSessionByName(string $playerName)
    {
        if (isset(self::$sessions[strtolower($playerName)])) {
            return self::$sessions[strtolower($playerName)];
        }
        return null;
    }

    /**
     * @param Player $player
     * @return MorphPlayer|null
     */
    public static function getSessionByPlayer(Player $player)
    {
        return self::getSessionByName($player->getName());
    }

    public static function endAllSessions(): void
    {
        foreach (Server::getInstance()->getOnlinePlayers() as $player) {
            self::endSession($player);
        }
    }

    /**
     * @param Player $player
     */
    public static function endSession(Player $player): void
    {
        if (($session = self::getSessionByPlayer($player)) !== null) {
            $session->unMorph();
            unset(self::$sessions[strtolower($player->getName())]);
        }
    }
}