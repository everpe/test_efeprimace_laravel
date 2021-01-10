<?php

use Illuminate\Database\Seeder;
use App\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Guasón
        $film1 = new Film();
        $film1->title = 'Guasón';
        $film1->description = 'Arthur Fleck adora hacer reír a la gente, pero su carrera como comediante es un fracaso. El repudio social, la marginación y una serie de trágicos acontecimientos lo conducen por el sendero de la locura y, finalmente, cae en el mundo del crimen.';
        $film1->relase_year = 2019;
        $film1->rental_duration = '02:02:34';
        $film1->rental_rate = 30.34;
        $film1->replacement_cost = 10.54;
        $film1->rating = 'Crimen';
        $film1->special_features = 'Nominaciones: Premio Óscar a la Mejor Película, MÁS';
        $film1->lenguaje_id = 1;
        $film1->original_lenguaje_id = 2;
        $film1->save();

        // Como entrenar a tu dragón 3
        $film2 = new Film();
        $film2->title = 'Cómo entrenar a tu dragón 3';
        $film2->description = 'Hipo descubre que Chimuelo no es el único Furia Nocturna y debe buscar el Mundo Oculto, una utopía secreta para descubrir finalmente sus destinos como dragón y jinete.';
        $film2->relase_year = 2019;
        $film2->rental_duration = '01:45:14';
        $film2->rental_rate = 33.34;
        $film2->replacement_cost = 15.54;
        $film2->rating = 'Infantil';
        $film2->special_features = 'Nominaciones: Premio Óscar a la Mejor Película de Animación, MÁS';
        $film2->lenguaje_id = 3;
        $film2->original_lenguaje_id = 2;
        $film2->save();

        // Soul
        $film3 = new Film();
        $film3->title = 'Soul';
        $film3->description = 'Soul es una película animada estadounidense de aventura, drama y comedia dirigida por Pete Docter y producida por Pixar Animation Studios.';
        $film3->relase_year = 2020;
        $film3->rental_duration = '01:47:14';
        $film3->rental_rate = 55.34;
        $film3->replacement_cost = 24.54;
        $film3->rating = 'Comedia';
        $film3->special_features = 'Música: Trent Reznor; Atticus Ross';
        $film3->lenguaje_id = 4;
        $film3->original_lenguaje_id = 1;
        $film3->save();



    }
}
