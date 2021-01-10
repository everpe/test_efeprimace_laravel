<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use Illuminate\Support\Facades\Validator;
class ActorController extends Controller
{
    // List all actors.
    public function index()
    {   
        $actors = Actor::all();

        return view('actors', ['actors' => $actors]);
    }

     /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // echo('createActor');
        // $lenguajes = Lenguaje::all();
        return view('createActor');
    }

    public function store(Request $request){
        
        $params=$request->all();
        $validate=\Validator::make($params,[
            'first_name'=>'required',
            'last_name'=>'required',
        ]);
        if(!$validate->fails()){
            $actor= new Actor();
            $actor->first_name=$params['first_name'];
            $actor->last_name=$params['last_name'];
            $actor->save();
            echo('Actor Creado Correctamente');
        }else{
            // SE PODRIAN MOSTRAR ESTOS MENSAJES DE ERROR CON JS
            echo($validate->errors());
        }
    }    
}
