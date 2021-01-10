@extends('layouts.app')

@section('content')


<div class="text-center mt-4 mb-4">
<h3>Nueva Película</h3>
    <div class="card mx-auto " style="width:80%">
        <form class="form-group"  method="POST" action="{{ url('/films')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Titulo </label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">Año de Lanzamiento</label>
                        <input type="number" min="0" name="release_year" id="release_year" class="form-control">
                    </div>
                    
                </div>        
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Lenguaje De la Pelicula</label> <br>
                        <select class="form-control" name="lenguaje" id="lenguaje">
                            <option value="" ></option>
                            @foreach ($lenguajes as $leng)
                            <option value="{{$leng->id}}" >{{$leng->name}}</option>
                            @endforeach
                        </select>
                    </div>       
                    <div class="col">
                        <label for="">Lenguaje Original</label> <br>
                        <select class="form-control" name="lenguajeOriginal" id="lenguajeOriginal">
                            <option value="" selected></option>
                            @foreach ($lenguajes as $leng)
                            <option value="{{$leng->id}}" >{{$leng->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Clasificación</label>
                        <input type="text"  name="rating" id="rating" class="form-control">
                    </div>
                </div>
                <br><br>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <label for="">Duración Alquiler de Pelicula</label> <br>
                        <input class="form-control" name="rental_duration" type="number" 
                            placeholder="Duracion Alquiler" step="0.1">  
                    </div>
                    <div class="col">
                        <label for="rental_rate">Tarifa de Alquiler</label> <br>
                        <input class="form-control" name="rental_rate" type="number" 
                        placeholder="Tarifa de Alquiler" step="0.01"> 
                               
                    </div>
                    <div class="col">
                        <label for="">Costo de Reemplazo</label> <br>
                        <input class="form-control" name="replacement_cost" type="number" 
                        placeholder="Costo Reemplazo Pelicula" step="0.01">        
                    </div>               
                </div>
            </div>
            <div class="form-group">
                <label for="w3review">Descripción</label>
                <textarea class="form-control" id="w3review" name="description" id="description" rows="4"  cols="120">
                </textarea>
            </div>
            

            <button type="submit"  class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('films.index') }}" type="button" class="btn btn-dark" >Volver</a>
        <br><br><br>
    </div>
</div>


@endsection