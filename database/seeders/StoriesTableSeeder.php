<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::create([
            'title' => "Dans la grotte"
        ]);

        Story::create([
            'title' => "Dans l'espace"
        ]);
    }
}
