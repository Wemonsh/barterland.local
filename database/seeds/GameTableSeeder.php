<?php

use App\Game;
use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'Aion',
            'alias' => 'aion',
            'preview_image' => '/img/icons/Aion.png',
            'full_image' => '/img/pages/Aion.png',
            'background_color' => '#a71e33',
        ]);

        Game::create([
            'name' => 'Albion Online',
            'alias' => 'albion-online',
            'preview_image' => '/img/icons/AlbionOnline.png',
            'full_image' => '/img/pages/AlbionOnline.png',
            'background_color' => '#780d93',
        ]);

        Game::create([
            'name' => 'Archeage (RU)',
            'alias' => 'archeage',
            'preview_image' => '/img/icons/Archeage.png',
            'full_image' => '/img/pages/Archeage.png',
            'background_color' => 'linear-gradient(180deg, #FF7817, #FF1E64)',
        ]);

        Game::create([
            'name' => 'Black Desert (RU)',
            'alias' => 'black-desert',
            'preview_image' => '/img/icons/BlackDesert.png',
            'full_image' => '/img/pages/BlackDesert.png',
            'background_color' => '#273957',
        ]);

        Game::create([
            'name' => 'Blade & Soul (RU)',
            'alias' => 'blade-and-soul',
            'preview_image' => '/img/icons/BladeAndSoul.png',
            'full_image' => '/img/pages/BladeAndSoul.png',
            'background_color' => '#ffb0b0',
        ]);

        Game::create([
            'name' => 'Clash of Clans',
            'alias' => 'clash-of-clans',
            'preview_image' => '/img/icons/Clash_of_Clans.png',
            'full_image' => '/img/pages/Clash_of_Clans.png',
            'background_color' => '#ffb300',
        ]);

        Game::create([
            'name' => 'Crossout',
            'alias' => 'crossout',
            'preview_image' => '/img/icons/Crossout.png',
            'full_image' => '/img/pages/Crossout.png',
            'background_color' => '#01485c',
        ]);

        Game::create([
            'name' => 'CS GO',
            'alias' => 'cs_go',
            'preview_image' => '/img/icons/CS_GO.png',
            'full_image' => '/img/pages/CS_GO.png',
            'background_color' => '#0e111a',
        ]);

        Game::create([
            'name' => 'Destiny 2',
            'alias' => 'destiny-2',
            'preview_image' => '/img/icons/Destiny_2.png',
            'full_image' => '/img/pages/Destiny_2.png',
            'background_color' => '#92c000',
        ]);

        Game::create([
            'name' => 'Diablo 3',
            'alias' => 'diablo-3',
            'preview_image' => '/img/icons/Diablo_3.png',
            'full_image' => '/img/pages/Diablo_3.png',
            'background_color' => '#92c000',
        ]);

        Game::create([
            'name' => 'Dota 2',
            'alias' => 'dota-2',
            'preview_image' => '/img/icons/Dota_2.png',
            'full_image' => '/img/pages/Dota_2.png',
            'background_color' => 'linear-gradient(270deg, #5BF2A7, #03C1E3)',
        ]);

        Game::create([
            'name' => 'Elder Scrolls Online',
            'alias' => 'elder-scrolls-online',
            'preview_image' => '/img/icons/Elder_Scrolls_Online.png',
            'full_image' => '/img/pages/Elder_Scrolls_Online.png',
            'background_color' => '#03513f',
        ]);

        Game::create([
            'name' => 'Escape from Tarkov',
            'alias' => 'escape-from-tarkov',
            'preview_image' => '/img/icons/Escape_from_Tarkov.png',
            'full_image' => '/img/pages/Escape_from_Tarkov.png',
            'background_color' => '#0e0a09',
        ]);

        Game::create([
            'name' => 'EVE Online',
            'alias' => 'eve-online',
            'preview_image' => '/img/icons/EVE_Online.png',
            'full_image' => '/img/pages/EVE_Online.png',
            'background_color' => '#009dda',
        ]);

        Game::create([
            'name' => 'Fifa',
            'alias' => 'fifa',
            'preview_image' => '/img/icons/Fifa.png',
            'full_image' => '/img/pages/Fifa.png',
            'background_color' => '#00aada',
        ]);

        Game::create([
            'name' => 'GTA 5',
            'alias' => 'gta-5',
            'preview_image' => '/img/icons/GTA_5.png',
            'full_image' => '/img/pages/GTA_5.png',
            'background_color' => '#00aada',
        ]);

        Game::create([
            'name' => 'GTA SAMP, CRMP, RP',
            'alias' => 'gta-samp-crmp-rp',
            'preview_image' => '/img/icons/GTA_SAMP_CRMP_RP.png',
            'full_image' => '/img/pages/GTA_SAMP_CRMP_RP.png',
            'background_color' => '#deb666',
        ]);

        Game::create([
            'name' => 'Guild Wars 2',
            'alias' => 'guild-wars-2',
            'preview_image' => '/img/icons/Guild_Wars_2.png',
            'full_image' => '/img/pages/Guild_Wars_2.png',
            'background_color' => 'linear-gradient(270deg, #D3F9FF, #0095B0)',
        ]);

        Game::create([
            'name' => 'Gwent',
            'alias' => 'gwent',
            'preview_image' => '/img/icons/Gwent.png',
            'full_image' => '/img/pages/Gwent.png',
            'background_color' => '#060606',
        ]);

        Game::create([
            'name' => 'Hearthstone',
            'alias' => 'Hearthstone',
            'preview_image' => '/img/icons/Hearthstone.png',
            'full_image' => '/img/pages/Hearthstone.png',
            'background_color' => '#060606',
        ]);

        Game::create([
            'name' => 'League of Legends',
            'alias' => 'league-of-legends',
            'preview_image' => '/img/icons/League_of_Legends.png',
            'full_image' => '/img/pages/League_of_Legends.png',
            'background_color' => 'linear-gradient(-72deg, #F3D184, #DC7E0E)',
        ]);

        Game::create([
            'name' => 'Lineage 2 Classic (EU|NA)',
            'alias' => 'lineage-2-classic-eu-na',
            'preview_image' => '/img/icons/Lineage_2_Classic_EU_NA.png',
            'full_image' => '/img/pages/Lineage_2_Classic_EU_NA.png',
            'background_color' => 'linear-gradient(180deg, #FFE557, #D9F29100)',
        ]);

        Game::create([
            'name' => 'Lineage (RU)',
            'alias' => 'lineage-ru',
            'preview_image' => '/img/icons/lineage_ru.png',
            'full_image' => '/img/pages/lineage_ru.png',
            'background_color' => '#41c7c7',
        ]);

        Game::create([
            'name' => 'Lineage 2 Free',
            'alias' => 'lineage-2-free',
            'preview_image' => '/img/icons/Lineage_2_Free.png',
            'full_image' => '/img/pages/Lineage_2_Free.png',
            'background_color' => '#0e111a',
        ]);

        Game::create([
            'name' => 'Neverwinter Online',
            'alias' => 'neverwinter-online',
            'preview_image' => '/img/icons/Neverwinter_online.png',
            'full_image' => '/img/pages/Neverwinter_online.png',
            'background_color' => '#d98c6b',
        ]);

        Game::create([
            'name' => 'Overwatch',
            'alias' => 'overwatch',
            'preview_image' => '/img/icons/Overwatch.png',
            'full_image' => '/img/pages/Overwatch.png',
            'background_color' => '#f7b500',
        ]);

        Game::create([
            'name' => 'Path of Exile',
            'alias' => 'path-of-exile',
            'preview_image' => '/img/icons/Path_of_Exile.png',
            'full_image' => '/img/pages/Path_of_Exile.png',
            'background_color' => 'linear-gradient(180deg, #8D19FA, #03C1E3)',
        ]);

        Game::create([
            'name' => 'Perfect World (RU)',
            'alias' => 'perfect-world-ru',
            'preview_image' => '/img/icons/Perfect_World_RU.png',
            'full_image' => '/img/pages/Perfect_World_RU.png',
            'background_color' => '#fba3bc',
        ]);

        Game::create([
            'name' => 'PUBG',
            'alias' => 'pubg',
            'preview_image' => '/img/icons/PUBG.png',
            'full_image' => '/img/pages/PUBG.png',
            'background_color' => '#000000',
        ]);

        Game::create([
            'name' => 'Revelation Online',
            'alias' => 'revelation-online',
            'preview_image' => '/img/icons/Revelation_Online.png',
            'full_image' => '/img/pages/Revelation_Online.png',
            'background_color' => '#eef0f5',
        ]);

        Game::create([
            'name' => 'Tom Clancy\'s Rainbow Six',
            'alias' => 'tom-clancys-rainbow-six',
            'preview_image' => '/img/icons/Tom_Clancys_Rainbow_Six.png',
            'full_image' => '/img/pages/Tom_Clancys_Rainbow_Six.png',
            'background_color' => '#00aada',
        ]);

        Game::create([
            'name' => 'War Thunder',
            'alias' => 'war-thunder',
            'preview_image' => '/img/icons/War_Thunder.png',
            'full_image' => '/img/pages/War_Thunder.png',
            'background_color' => '#005392',
        ]);

        Game::create([
            'name' => 'Warface',
            'alias' => 'warface',
            'preview_image' => '/img/icons/Warface.png',
            'full_image' => '/img/pages/Warface.png',
            'background_color' => '#1a453a',
        ]);

        Game::create([
            'name' => 'Warframe',
            'alias' => 'warframe',
            'preview_image' => '/img/icons/Warframe.png',
            'full_image' => '/img/pages/Warframe.png',
            'background_color' => '#00b6cf',
        ]);

        Game::create([
            'name' => 'World of Tanks',
            'alias' => 'world-of-tanks',
            'preview_image' => '/img/icons/World_of_Tanks.png',
            'full_image' => '/img/pages/World_of_Tanks.png',
            'background_color' => '#aac9ac',
        ]);

        Game::create([
            'name' => 'World of Warships',
            'alias' => 'world-of-warships',
            'preview_image' => '/img/icons/World_of_Warships.png',
            'full_image' => '/img/pages/World_of_Warships.png',
            'background_color' => '#005392',
        ]);

        Game::create([
            'name' => 'WOW Free',
            'alias' => 'wow-free',
            'preview_image' => '/img/icons/WOW_FREE.png',
            'full_image' => '/img/pages/WOW_FREE.png',
            'background_color' => 'linear-gradient(235deg, #7B1A1A, #131B1D)',
        ]);

        Game::create([
            'name' => 'WOW (RU|EU)',
            'alias' => 'wow-ru-eu',
            'preview_image' => '/img/icons/WOW_RU_EU.png',
            'full_image' => '/img/pages/WOW_RU_EU.png',
            'background_color' => 'linear-gradient(180deg, #7B1A1A, #D9000000)',
        ]);

        Game::create([
            'name' => 'Epic games',
            'alias' => 'epic-games',
            'preview_image' => '/img/icons/Epic_games.png',
            'full_image' => '/img/pages/Epic_games.png',
            'background_color' => '#000000',
        ]);

        Game::create([
            'name' => 'Origin',
            'alias' => 'origin',
            'preview_image' => '/img/icons/Origin.png',
            'full_image' => '/img/pages/Origin.png',
            'background_color' => '#fdb166',
        ]);

        Game::create([
            'name' => 'Steam',
            'alias' => 'steam',
            'preview_image' => '/img/icons/Steam.png',
            'full_image' => '/img/pages/Steam.png',
            'background_color' => '#0f2b50',
        ]);

        Game::create([
            'name' => 'Uplay',
            'alias' => 'uplay',
            'preview_image' => '/img/icons/Uplay.png',
            'full_image' => '/img/pages/Uplay.png',
            'background_color' => '#32c5ff',
        ]);
    }
}
