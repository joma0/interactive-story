<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::create([
            'origin_chapter_id' => 1,
            'result_chapter_id' => 2,
            'text' => 'Faites votre choix.'
        ]);
    }
}
