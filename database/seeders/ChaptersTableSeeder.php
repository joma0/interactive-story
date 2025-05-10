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
            'text' => 'Vous vous réveillez.'
        ]);

        Chapter::create([
            'story_id' => 1,
            'number' => 2,
            'version' => 'A',
            'text' => 'Vous avancez par petits pas.'
        ]);

        Chapter::create([
            'story_id' => 2,
            'number' => 1,
            'version' => 'A',
            'text' => 'Vous vous réveillez dans une obscurité totale.'
        ]);
    }
}
