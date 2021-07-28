<?php

namespace Heisenburger69\BurgerMorphs\utils;

use pocketmine\Player;
use function str_replace;
use function strtolower;

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
            if($player->hasPermission("morph.$morph") || $player->hasPermission("morph.all")) {
                $allowed[] = $morph;
            }
            if($player->hasPermission("morph.baby_$morph") || $player->hasPermission("morph.all")) {
                $allowed[] = "baby_" . $morph;
            }
            if($player->hasPermission("morph.dinnerbone_$morph") || $player->hasPermission("morph.all")) {
                $allowed[] = "dinnerbone_" . $morph;
            }
        }
        return $allowed;
    }
}