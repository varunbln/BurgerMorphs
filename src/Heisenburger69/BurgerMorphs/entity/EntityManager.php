<?php

namespace Heisenburger69\BurgerMorphs\entity;

use Heisenburger69\BurgerMorphs\entity\types\Bat;
use Heisenburger69\BurgerMorphs\entity\types\Bee;
use Heisenburger69\BurgerMorphs\entity\types\Blaze;
use Heisenburger69\BurgerMorphs\entity\types\CaveSpider;
use Heisenburger69\BurgerMorphs\entity\types\Chicken;
use Heisenburger69\BurgerMorphs\entity\types\Cow;
use Heisenburger69\BurgerMorphs\entity\types\Creeper;
use Heisenburger69\BurgerMorphs\entity\types\Donkey;
use Heisenburger69\BurgerMorphs\entity\types\ElderGuardian;
use Heisenburger69\BurgerMorphs\entity\types\Enderman;
use Heisenburger69\BurgerMorphs\entity\types\Endermite;
use Heisenburger69\BurgerMorphs\entity\types\Evoker;
use Heisenburger69\BurgerMorphs\entity\types\Fox;
use Heisenburger69\BurgerMorphs\entity\types\Ghast;
use Heisenburger69\BurgerMorphs\entity\types\Guardian;
use Heisenburger69\BurgerMorphs\entity\types\Horse;
use Heisenburger69\BurgerMorphs\entity\types\Husk;
use Heisenburger69\BurgerMorphs\entity\types\IronGolem;
use Heisenburger69\BurgerMorphs\entity\types\Llama;
use Heisenburger69\BurgerMorphs\entity\types\MagmaCube;
use Heisenburger69\BurgerMorphs\entity\types\Mooshroom;
use Heisenburger69\BurgerMorphs\entity\types\Mule;
use Heisenburger69\BurgerMorphs\entity\types\Ocelot;
use Heisenburger69\BurgerMorphs\entity\types\Panda;
use Heisenburger69\BurgerMorphs\entity\types\Parrot;
use Heisenburger69\BurgerMorphs\entity\types\Pig;
use Heisenburger69\BurgerMorphs\entity\types\PolarBear;
use Heisenburger69\BurgerMorphs\entity\types\Rabbit;
use Heisenburger69\BurgerMorphs\entity\types\RainbowSheep;
use Heisenburger69\BurgerMorphs\entity\types\Ravager;
use Heisenburger69\BurgerMorphs\entity\types\Sheep;
use Heisenburger69\BurgerMorphs\entity\types\Shulker;
use Heisenburger69\BurgerMorphs\entity\types\Silverfish;
use Heisenburger69\BurgerMorphs\entity\types\Skeleton;
use Heisenburger69\BurgerMorphs\entity\types\Slime;
use Heisenburger69\BurgerMorphs\entity\types\SnowGolem;
use Heisenburger69\BurgerMorphs\entity\types\Spider;
use Heisenburger69\BurgerMorphs\entity\types\Stray;
use Heisenburger69\BurgerMorphs\entity\types\Vex;
use Heisenburger69\BurgerMorphs\entity\types\Vindicator;
use Heisenburger69\BurgerMorphs\entity\types\Witch;
use Heisenburger69\BurgerMorphs\entity\types\WitherSkeleton;
use Heisenburger69\BurgerMorphs\entity\types\Wolf;
use Heisenburger69\BurgerMorphs\entity\types\Zombie;
use Heisenburger69\BurgerMorphs\entity\types\ZombiePigman;
use Heisenburger69\BurgerMorphs\entity\types\ZombieVillager;
use Heisenburger69\BurgerMorphs\utils\Utils;
use pocketmine\entity\Entity;
use pocketmine\Player;
use function str_replace;
use function strpos;
use function var_dump;

class EntityManager
{
    public static function init(): void
    {
        Entity::registerEntity(Zombie::class, false, ["morph_zombie"]);
        Entity::registerEntity(Bat::class, false, ['morph_bat']);
        Entity::registerEntity(Bee::class, false, ['morph_bee']);
        Entity::registerEntity(Blaze::class, false, ['morph_blaze']);
        Entity::registerEntity(CaveSpider::class, false, ['morph_cavespider']);
        Entity::registerEntity(Chicken::class, false, ['morph_chicken']);
        Entity::registerEntity(Cow::class, false, ['morph_cow']);
        Entity::registerEntity(Creeper::class, false, ['morph_creeper']);
        Entity::registerEntity(Donkey::class, false, ['morph_donkey']);
        Entity::registerEntity(ElderGuardian::class, false, ['morph_elderguardian']);
        Entity::registerEntity(Enderman::class, false, ['morph_enderman']);
        Entity::registerEntity(Endermite::class, false, ['morph_endermite']);
        Entity::registerEntity(Evoker::class, false, ['morph_evoker']);
        Entity::registerEntity(Fox::class, false, ['morph_fox']);
        Entity::registerEntity(Ghast::class, false, ['morph_ghast']);
        Entity::registerEntity(Guardian::class, false, ['morph_guardian']);
        Entity::registerEntity(Horse::class, false, ['morph_horse']);
        Entity::registerEntity(Husk::class, false, ['morph_husk']);
        Entity::registerEntity(IronGolem::class, false, ['morph_irongolem']);
        Entity::registerEntity(Llama::class, false, ['morph_llama']);
        Entity::registerEntity(MagmaCube::class, false, ['morph_magmacube']);
        Entity::registerEntity(Mooshroom::class, false, ['morph_mooshroom']);
        Entity::registerEntity(Mule::class, false, ['morph_mule']);
        Entity::registerEntity(Ocelot::class, false, ['morph_ocelot']);
        Entity::registerEntity(Panda::class, false, ['morph_panda']);
        Entity::registerEntity(Parrot::class, false, ['morph_parrot']);
        Entity::registerEntity(Pig::class, false, ['morph_pig']);
        Entity::registerEntity(PolarBear::class, false, ['morph_polarbear']);
        Entity::registerEntity(Rabbit::class, false, ['morph_rabbit']);
        Entity::registerEntity(Ravager::class, false, ['morph_ravager']);
        Entity::registerEntity(RainbowSheep::class, false, ['morph_rainbowsheep']);
        Entity::registerEntity(Sheep::class, false, ['morph_sheep']);
        Entity::registerEntity(Silverfish::class, false, ['morph_silverfish']);
        Entity::registerEntity(Skeleton::class, false, ['morph_skeleton']);
        Entity::registerEntity(Slime::class, false, ['morph_slime']);
        Entity::registerEntity(SnowGolem::class, false, ['morph_snowgolem']);
        Entity::registerEntity(Spider::class, false, ['morph_spider']);
        Entity::registerEntity(Stray::class, false, ['morph_stray']);
        Entity::registerEntity(Vex::class, false, ['morph_vex']);
        Entity::registerEntity(Vindicator::class, false, ['morph_vindicator']);
        Entity::registerEntity(Witch::class, false, ['morph_witch']);
        Entity::registerEntity(WitherSkeleton::class, false, ['morph_witherskeleton']);
        Entity::registerEntity(Wolf::class, false, ['morph_wolf']);
        Entity::registerEntity(ZombieVillager::class, false, ['morph_zombievillager']);
        Entity::registerEntity(ZombiePigman::class, false, ['morph_zombiepigman']);
    }

    /**
     * @param Player $player
     * @param string $morphName
     * @return Entity|null
     */
    public static function createMorphEntity(Player $player, string $morphName): ?Entity
    {
        $dinnerbone = true;
        if(strpos($morphName, "dinnerbone_") === false) {
            $dinnerbone = false;
        } else {
            $morphName = str_replace("dinnerbone_", "", $morphName);
        }
        return Entity::createEntity(Utils::convertTypeToMorphSaveId($morphName), $player->level, Entity::createBaseNBT($player, null, $player->getYaw(), $player->getPitch()), $player, $dinnerbone);
    }
}