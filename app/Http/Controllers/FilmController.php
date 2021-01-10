<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Lenguaje;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    // List all films.
    public function index()
    {   
        $films = Film::all();

        return view('films', ['films' => $films]);
    }

    // Information for Film.
    public function show($id)
    {
        $film = Film::findOrFail($id);
        $actors = $film->actors()->orderBy('first_name')->get();


        return view('film', ['film' => $film, 'actors' => $actors]);
    }


    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        $lenguajes = Lenguaje::all();
        return view('createFilm',['lenguajes' => $lenguajes]);
    }

    /**
     * Almacenar Entidad en BD
     */
    public function store(Request $request){

        $params=$request->all();
        $validate=\Validator::make($params,[
            'lenguaje'=>'required',
            'lenguajeOriginal'=>'required',
            'release_year'=>'required|numeric|min:1901|max:2021',
            'description'=>'required',
            'title'=>'required',
            'rental_duration'=>'required',
            'rental_rate'=>'required|numeric|min:0|max:99.99',
            //5 numeros totales de los cuales 2 son decimales esa es la validation here
            'replacement_cost'=>'required|numeric|min:0|max:999.99',
            'rating'=>'required',
        ]);
        if(!$validate->fails()){
            //Los lenguajes
            $leng = Lenguaje::findOrFail($params['lenguaje']);
            $lengOrigin = Lenguaje::findOrFail($params['lenguajeOriginal']);
            
            $film= new Film();
            $film->title=$params['title'];
            $film->description=$params['description'];
            $film->relase_year=$params['release_year'];
            $film->rental_duration=$params['rental_duration'];
            $film->rental_rate=$params['rental_rate'];
            $film->replacement_cost=$params['replacement_cost'];
            $film->rating=$params['rating'];
            $film->lenguaje_id=$leng->id;
            $film->original_lenguaje_id=$lengOrigin->id;
            $film->save();
            echo('Pelicula Almacenada Correctamente, refresque la lista porfavor');
        }else{
            echo($validate->errors());
        }

        
    }


    /**
     * Función de busqueda por Titulo(nombre) de Pelicula
     */
    public function search(Request $request){
        $params=$request->all();
        $title=$params['field'];

        $filmsQuery=Film::where('title', $title)->get();

        return view('films', ['films' => $filmsQuery]);
    }
}
