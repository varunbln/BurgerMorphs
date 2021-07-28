<?php

namespace Heisenburger69\BurgerMorphs\utils;

use pocketmine\Player;
use function str_replace;
use function strtolower;
use function ucwords;

class Utils
{
    public static array $availableMorphs =
        [
            "zombie",
            'bat',
            'bee',
            'blaze',
            'cavespider',
            'chicken',
            'cow',
            'creeper',
            'donkey',
            'elderguardian',
            'enderman',
            'endermite',
            'evoker',
            'fox',
            'ghast',
            'guardian',
            'horse',
            'husk',
            'irongolem',
            'llama',
            'magmacube',
            'mooshroom',
            'mule',
            'ocelot',
            'panda',
            'parrot',
            'pig',
            'polarbear',
            'rabbit',
            'ravager',
            'rainbowsheep',
            'sheep',
            'silverfish',
            'skeleton',
            'slime',
            'snowgolem',
            'spider',
            'stray',
            'turtle',
            'vex',
            'vindicator',
            'witch',
            'witherskeleton',
            'wolf',
            'zombievillager',
            'zombiepigman',
        ];

    public static function convertTypeToMorphSaveId(string $type): string
    {
        return "morph_" . strtolower($type);
    }

    public static function convertMorphSaveIdToType(string $saveId): string
    {
        return str_replace("morph_", "", $saveId);
    }

    public static function formatMorphId(string $morph): string
    {
        return ucwords(str_replace(["_", "dinnerbone", "baby"], [" ", "Upside Down", "Baby"], $morph));
    }

    /**
     * Returns a list of Morphs the player has permissions for
     *
     * @param Player $player
     * @return array
     */
    public static function getAllowedMorphs(Player $player): array
    {
        $allowed = [];
        foreach (self::$availableMorphs as $morph) {
            if ($player->hasPermission("burgermorphs.$morph") || $player->hasPermission("burgermorphs.all")) {
                $allowed[] = $morph;
            }
            if ($player->hasPermission("burgermorphs.baby_$morph") || $player->hasPermission("burgermorphs.all")) {
                $allowed[] = "baby_" . $morph;
            }
            if ($player->hasPermission("burgermorphs.dinnerbone_$morph") || $player->hasPermission("burgermorphs.all")) {
                $allowed[] = "dinnerbone_" . $morph;
            }
            if ($player->hasPermission("burgermorphs.baby_dinnerbone_$morph") || $player->hasPermission("burgermorphs.all")) {
                $allowed[] = "baby_dinnerbone_" . $morph;
            }
        }
        return $allowed;
    }

    /**
     * Returns a list of all morphs the plugin implements
     *
     * @return array
     */
    public static function getAvailableMorphs(): array
    {
        $allowed = [];
        foreach (self::$availableMorphs as $morph) {
            $allowed[] = $morph;
            $allowed[] = "baby_" . $morph;
            $allowed[] = "dinnerbone_" . $morph;
            $allowed[] = "baby_dinnerbone_" . $morph;
        }
        return $allowed;
    }
}