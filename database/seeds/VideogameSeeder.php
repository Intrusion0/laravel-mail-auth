<?php

use App\Videogame;
use Illuminate\Database\Seeder;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Videogame::class, 50)->create();
    }
}
