<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Brad Pitt y Depp actuaron en "Guasón"
        DB::table('actor_film')->insert([
            'actor_id' => 1,
            'film_id' => 1
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 2,
            'film_id' => 1
        ]);

        // Tomm y Will Smith Actuaron en "Cómo entrenar a tu dragón"
        DB::table('actor_film')->insert([
            'actor_id' => 3,
            'film_id' => 2
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 4,
            'film_id' => 2
        ]);

        // Brad Pitt, Depp, Tomm y Will Smith actuaron en "Soul"
        DB::table('actor_film')->insert([
            'actor_id' => 1,
            'film_id' => 3
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 2,
            'film_id' => 3
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 3,
            'film_id' => 3
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 4,
            'film_id' => 3
        ]);

    }
}
