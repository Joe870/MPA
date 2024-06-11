<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create(["name" => "Rock"]);
        Genres::create(["name" => "Electronic"]);
        Genres::create(["name" => "pop"]);
        Genres::create(["name" => "Rap"]);
        Genres::create(["name" => "Metal"]);
        Genres::factory()->count(295)->create();
    }
}
