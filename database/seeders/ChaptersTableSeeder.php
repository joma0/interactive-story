<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chapter::create([
            'story_id' => 1,
            'number' => 1,
            'version' => 'A',
            'text' => 'Ceci est le premier chapitre de la première histoire.'
        ]);

        Chapter::create([
            'story_id' => 1,
            'number' => 2,
            'version' => 'A',
            'text' => 'Ceci est le deuxième chapitre de la première histoire.'
        ]);

        Chapter::create([
            'story_id' => 2,
            'number' => 1,
            'version' => 'A',
            'text' => 'Ceci est le premier chapitre de la deuxième histoire.'
        ]);
    }
}
