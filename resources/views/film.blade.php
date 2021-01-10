@extends('layouts.app')

@section('content')

<div class="text-center mt-4 mb-4">
    <div class="card mx-auto mt-4" style="width: 30rem;">
        <div class="card-header">
            <h3>{{ $film->title }}</h3>            
        </div>
        <div class="card-body">
          {{-- <h5 class="card-title">{{ $film->title }}</h5> --}}
          <h6 class="card-subtitle mb-2 text-muted">{{ $film->relase_year }}</h6>
          <p class="card-text">{{ $film->description }}</p>
          <p class="card-text">Idioma: {{ $film->lenguaje->name }}</p>
          <p class="card-text">Idioma Original: {{ $film->originalLenguaje->name }}</p>
          <p class="card-text">Duración Renta: {{ $film->rental_duration }}</p>
          <p class="card-text">Tasa Renta: {{ $film->rental_rate }}</p>
          <p class="card-text">Costo Reemplazo: {{ $film->replacement_cost }}</p>
          <p class="card-text">Clasificación: {{ $film->rating }}</p>
          <p class="card-text">Características: {{ $film->special_features }}</p>
          <div class="card-footer text-muted">
            <h3>Actores</h3>
            @foreach ($actors as $actor)
                <p class="card-text">{{ $actor->first_name . ' ' . $actor->last_name }}</p>          
            @endforeach
          </div>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('films.index') }}" type="button" class="btn btn-dark" >Volver</a>

    <br><br><br>
</div>

@endsection