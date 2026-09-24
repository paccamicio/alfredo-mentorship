<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Elden Ring',
                'description' => 'Elden Ring is a action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. It was released for PlayStation 4, PlayStation 5, Windows, and Xbox One in February 2022, and for Xbox Series X/S in March 2022.',
                'image' => 'https://via.placeholder.com/150',
                'price' => 400,
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'description' => 'The Witcher 3: Wild Hunt is a action role-playing game developed by CD Projekt Red and published by CD Projekt. It was released for PlayStation 4, Windows, and Xbox One in May 2015, and for Xbox Series X/S in December 2020.',
                'image' => 'https://via.placeholder.com/150',
                'price' => 300,
            ],
            [
                'name' => 'The Last of Us Part II',
                'description' => 'The Last of Us Part II is a action role-playing game developed by Naughty Dog and published by Sony Interactive Entertainment. It was released for PlayStation 4 in June 2020.',
                'image' => 'https://via.placeholder.com/150',
                'price' => 250,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
