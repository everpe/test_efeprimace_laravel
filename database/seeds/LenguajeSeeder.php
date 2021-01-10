<?php

use Illuminate\Database\Seeder;
use App\Lenguaje;

class LenguajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lenguaje1 = new Lenguaje();
        $lenguaje1->name = "Español";
        $lenguaje1->save();

        $lenguaje2 = new Lenguaje();
        $lenguaje2->name = 'Inglés';
        $lenguaje2->save();

        $lenguaje3 = new Lenguaje();
        $lenguaje3->name = 'Hindi';
        $lenguaje3->save();

        $lenguaje4 = new Lenguaje();
        $lenguaje4->name = 'Ruso';
        $lenguaje4->save();
    }
}
