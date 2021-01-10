<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actor1 = new Actor();
        $actor1->first_name = 'Brad';
        $actor1->last_name = 'Pitt';
        $actor1->save();

        $actor2 = new Actor();
        $actor2->first_name = 'Johnny';
        $actor2->last_name = 'Depp';
        $actor2->save();

        $actor3 = new Actor();
        $actor3->first_name = 'Tom';
        $actor3->last_name = 'Cruise';
        $actor3->save();

        $actor4 = new Actor();
        $actor4->first_name = 'Will';
        $actor4->last_name = 'Smith';
        $actor4->save();

    }
}
