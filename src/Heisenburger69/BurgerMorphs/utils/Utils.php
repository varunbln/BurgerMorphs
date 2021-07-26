<?php

namespace Heisenburger69\BurgerMorphs\utils;

use function str_replace;
use function strtolower;

class Utils
{
    public static function convertTypeToMorphSaveId(string $type): string
    {
        return "morph_" . strtolower($type);
    }

    public static function convertMorphSaveIdToType(string $saveId): string
    {
        return str_replace("morph_", "", $saveId);
    }
}