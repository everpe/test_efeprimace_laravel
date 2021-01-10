@extends('layouts.app')

@section('content')
<!-- Main content -->
<section class="content pt-4">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->
        <!-- Tabla Full para gráficar los datos. -->
        <div class="card">
          <div class="card-header text-center">
            <h3 class="card-title">Listado De Peliculas</h3>
          </div>      
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <form class="form-inline my-2 my-lg-0"  method="POST" action="{{ url('/search')}}">
              @csrf
                <input class="form-control mr-sm-2" name="field" id="field"
                  enctype="multipart/form-data"
                  type="search" placeholder="Titulo Pelicula" aria-label="Search">
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0" >Buscar</button>

              </form>
            </div>
          </nav>    


          <!-- /.card-header -->
          <div class="card-body">
            <table id="main-table" class="table table-bordered table-hover">
              <thead class="thead-dark text-center">
                @if (count($films) != 0)
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Lanzamiento</th>
                    <th>Idioma</th>
                    <th>Duración</th>
                    <th>Costo Reemplazo</th>
                    <th>Clasificación</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                    {{-- @if (count($officials) != 0) --}}
                    {{-- Recorriendo los funcionarios obtenidos --}}
                    @foreach ($films as $film)
                    <tr>
                        <th scope="row">{{ $film->id }}</th>
                        <td> {{ $film->title }} </td>
                        <td> {{ $film->relase_year }} </td>
                        <td> {{ $film->lenguaje->name }} </td>     
                        <td> {{ $film->rental_duration }} </td>   
                        <td> $ {{ $film->replacement_cost }} </td> 
                        <td> {{ $film->rating }} </td> 
                        <td class="center-icons text-center">
                            <a class="btn btn-outline-primary" title="Ver Detalles" href="{{ route('films.show', $film->id ) }}">Ver Detalles</a>
                        </td>                  
                    </tr>                    
                    @endforeach
                    @else
                    <div class="alert alert-warning" role="alert">
                        ¡No se encuentra Infomración con ese titulo de pelicula!
                    </div>
                    @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

        <div class="text-center mt-4">
        <a href="{{ route('films.create') }}" type="button" class="btn btn-outline-success" >Agregar Pelicula</a>
            <!-- <button type="button" class="btn btn-primary">Agregar Film</button> -->
        <br> <br><br>
         </div>
        

        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endSection