<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'The Witcher 3: Wild Hunt',
                'developer' => 'CD Projekt Red',
                'genres' => json_encode(['RPG', 'Open World']),
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'developer' => 'Rockstar Games',
                'genres' => json_encode(['Action', 'Adventure', 'Open World']),
            ],
            [
                'title' => 'Grand Theft Auto V',
                'developer' => 'Rockstar Games',
                'genres' => json_encode(['Action', 'Open World']),
            ],
            [
                'title' => 'Cyberpunk 2077',
                'developer' => 'CD Projeсt Red',
                'genres' => json_encode(['RPG', 'Open World', 'Sci-Fi']),
            ],
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'developer' => 'Nintendo',
                'genres' => json_encode(['Action', 'Adventure', 'Open World']),
            ],
            [
                'title' => 'FIFA 23',
                'developer' => 'EA Sports',
                'genres' => json_encode(['Sports', 'Simulation']),
            ],
            [
                'title' => 'Minecraft',
                'developer' => 'Mojang Studios',
                'genres' => json_encode(['Sandbox', 'Adventure']),
            ],
            [
                'title' => 'Dark Souls III',
                'developer' => 'FromSoftware',
                'genres' => json_encode(['Action', 'RPG']),
            ],
            [
                'title' => 'Among Us',
                'developer' => 'InnerSloth',
                'genres' => json_encode(['Social Deduction']),
            ],
            [
                'title' => 'Counter-Strike: 2',
                'developer' => 'Valve',
                'genres' => json_encode(['First-Person Shooter']),
            ],
        ]);
    }
}
