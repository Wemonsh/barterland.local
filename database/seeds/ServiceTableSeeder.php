<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Aion
        Service::create([
            'name' => 'Кинары',
            'alias' => 'kinars',
            'description' => 'Кинары (kinah) – это игровая валюта мира AION. Как и любые деньги, они позволяют получить массу преимуществ в игре. Покупайте кинары Aion на Руоффе.',
            'game_id' => 1,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 1,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 1,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 1,
            'type_id' => 2,
        ]);

        // Albion Online
        Service::create([
            'name' => 'Серебро',
            'alias' => 'silver',
            'description' => '',
            'game_id' => 2,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 2,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 2,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 2,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 2,
            'type_id' => 2,
        ]);

        // Archeage RU
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 3,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 3,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 3,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 3,
            'type_id' => 2,
        ]);

        // Black Desert RU
        Service::create([
            'name' => 'Серебро',
            'alias' => 'silver',
            'description' => '',
            'game_id' => 4,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 4,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 4,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 4,
            'type_id' => 2,
        ]);

        // Blade & Soul RU
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 5,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 5,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 5,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 5,
            'type_id' => 2,
        ]);

        // Clash of Clans
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 6,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 6,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 6,
            'type_id' => 2,
        ]);

        // Crossout
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 7,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 7,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 7,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 7,
            'type_id' => 2,
        ]);

        // CS GO
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 8,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Скины',
            'alias' => 'skins',
            'description' => '',
            'game_id' => 8,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 8,
            'type_id' => 2,
        ]);

        // Destiny 2
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 9,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 9,
            'type_id' => 2,
        ]);

        // Diablo 3
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 10,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 10,
            'type_id' => 2,
        ]);

        // Dota 2
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 11,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 11,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 11,
            'type_id' => 2,
        ]);

        // Elder Scrolls Online
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 12,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 12,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 12,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 12,
            'type_id' => 2,
        ]);

        // Escape from Tarkov
        Service::create([
            'name' => 'Рубли',
            'alias' => 'rubles',
            'description' => '',
            'game_id' => 13,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Доллары',
            'alias' => 'dollars',
            'description' => '',
            'game_id' => 13,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Евро',
            'alias' => 'euro',
            'description' => '',
            'game_id' => 13,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Биткойны',
            'alias' => 'bitcoins',
            'description' => '',
            'game_id' => 13,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 13,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 13,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 13,
            'type_id' => 2,
        ]);

        // EVE Online
        Service::create([
            'name' => 'ISK',
            'alias' => 'isk',
            'description' => '',
            'game_id' => 14,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 14,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 14,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 14,
            'type_id' => 2,
        ]);

        // Fifa
        Service::create([
            'name' => 'Монеты',
            'alias' => 'coins',
            'description' => '',
            'game_id' => 15,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 15,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 15,
            'type_id' => 2,
        ]);

        // GTA 5
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 16,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 16,
            'type_id' => 2,
        ]);

        // GTA SAMP, CRMP, RP
        Service::create([
            'name' => 'Вирты',
            'alias' => 'virts',
            'description' => '',
            'game_id' => 17,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 17,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 17,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 17,
            'type_id' => 2,
        ]);

        // Guild Wars 2
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 18,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 18,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 18,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 18,
            'type_id' => 2,
        ]);

        // Gwent
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 19,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 19,
            'type_id' => 2,
        ]);

        // Hearthstone
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 20,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 20,
            'type_id' => 2,
        ]);

        // League of Legends
        Service::create([
            'name' => 'Riot Points',
            'alias' => 'riot-points',
            'description' => '',
            'game_id' => 21,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 21,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 21,
            'type_id' => 2,
        ]);

        // Lineage 2 EU/NA
        Service::create([
            'name' => 'Адена',
            'alias' => 'adena',
            'description' => '',
            'game_id' => 22,
            'type_id' => 1,
        ]);


        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 22,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 22,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 22,
            'type_id' => 2,
        ]);

        // Lineage 2 RU
        Service::create([
            'name' => 'Адена',
            'alias' => 'adena',
            'description' => '',
            'game_id' => 23,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 23,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 23,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 23,
            'type_id' => 2,
        ]);

        // Lineage 2 Free
        Service::create([
            'name' => 'Адена',
            'alias' => 'adena',
            'description' => '',
            'game_id' => 24,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Монеты',
            'alias' => 'coins',
            'description' => '',
            'game_id' => 24,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 24,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 24,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 24,
            'type_id' => 2,
        ]);

        // Neverwinter online
        Service::create([
            'name' => 'Бриллианты',
            'alias' => 'diamonds',
            'description' => '',
            'game_id' => 25,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 25,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 25,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 25,
            'type_id' => 2,
        ]);

        // Overwatch
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 26,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Скины',
            'alias' => 'skins',
            'description' => '',
            'game_id' => 26,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 26,
            'type_id' => 2,
        ]);

        // Path of Exile
        Service::create([
            'name' => 'Сферы возвышения',
            'alias' => 'spheres-of-elevation',
            'description' => '',
            'game_id' => 27,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Сферы хаоса',
            'alias' => 'spheres-of-chaos',
            'description' => '',
            'game_id' => 27,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Сферы прочие',
            'alias' => 'other-spheres',
            'description' => '',
            'game_id' => 27,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 27,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Билды',
            'alias' => 'builds',
            'description' => '',
            'game_id' => 27,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 27,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 27,
            'type_id' => 2,
        ]);

        // Perfect World (RU)
        Service::create([
            'name' => 'Юани',
            'alias' => 'yuan',
            'description' => '',
            'game_id' => 28,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 28,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 28,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 28,
            'type_id' => 2,
        ]);

        // PUBG
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 29,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 29,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 29,
            'type_id' => 2,
        ]);

        // Revelation Online
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 30,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 30,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 30,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 30,
            'type_id' => 2,
        ]);

        // Tom Clancy's Rainbow 6
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 31,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 31,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 31,
            'type_id' => 2,
        ]);

        // War Thunder
        Service::create([
            'name' => 'GAIJIN COINS',
            'alias' => 'gaijin-coins',
            'description' => '',
            'game_id' => 32,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 32,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 32,
            'type_id' => 2,
        ]);

        // Warface
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 33,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 33,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 33,
            'type_id' => 2,
        ]);

        // Warframe
        Service::create([
            'name' => 'Платина',
            'alias' => 'platinum',
            'description' => '',
            'game_id' => 34,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 34,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 34,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 34,
            'type_id' => 2,
        ]);

        // World of Tanks
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 35,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Бонус коды',
            'alias' => 'bonus-codes',
            'description' => '',
            'game_id' => 35,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 35,
            'type_id' => 2,
        ]);

        // World of Warships
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 36,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 36,
            'type_id' => 2,
        ]);

        // WOW FREE
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 37,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 37,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Предметы',
            'alias' => 'subjects',
            'description' => '',
            'game_id' => 37,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Услуги',
            'alias' => 'services',
            'description' => '',
            'game_id' => 37,
            'type_id' => 2,
        ]);

        // WOW RU/EU
        Service::create([
            'name' => 'Золото',
            'alias' => 'gold',
            'description' => '',
            'game_id' => 38,
            'type_id' => 1,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Рейды',
            'alias' => 'raids',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Подземелья',
            'alias' => 'dungeons',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Прокачка',
            'alias' => 'pumping',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'PVP',
            'alias' => 'pvp',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Достижения',
            'alias' => 'achievements',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Маунты',
            'alias' => 'mounts',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Прочее',
            'alias' => 'other',
            'description' => '',
            'game_id' => 38,
            'type_id' => 2,
        ]);

        // Epic Games
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 39,
            'type_id' => 2,
        ]);

        // Origin
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 40,
            'type_id' => 2,
        ]);

        // Steam
        Service::create([
            'name' => 'Пополнение баланса',
            'alias' => 'deposit',
            'description' => '',
            'game_id' => 41,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 41,
            'type_id' => 2,
        ]);

        Service::create([
            'name' => 'Подарки',
            'alias' => 'gifts',
            'description' => '',
            'game_id' => 41,
            'type_id' => 2,
        ]);

        // Uplay
        Service::create([
            'name' => 'Аккаунты',
            'alias' => 'accounts',
            'description' => '',
            'game_id' => 42,
            'type_id' => 2,
        ]);
    }
}
