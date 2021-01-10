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
            <h3 class="card-title">Listado De Actores</h3>
          </div>          
          <!-- /.card-header -->
          <div class="card-body">
            <table id="main-table" class="table table-bordered table-hover">
              <thead class="thead-dark text-center">
                @if (count($actors) != 0)
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Última Modificación</th>
                </tr>
              </thead>
              <tbody>
                    {{-- @if (count($officials) != 0) --}}
                    {{-- Recorriendo los funcionarios obtenidos --}}
                    @foreach ($actors as $actor)
                    <tr>
                        <th scope="row">{{ $actor->id }}</th>
                        <td> {{ $actor->first_name }} </td>
                        <td> {{ $actor->last_name }} </td>     
                        <td> {{ $actor->updated_at }} </td>                     
                    </tr>                    
                    @endforeach
                    @else
                    <div class="alert alert-info" role="alert">
                        No hay información para mostrar!
                    </div>
                         
                    @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

        <div class="text-center mt-4">
          <a href="{{ route('actors.create') }}" type="button" class="btn btn-outline-success" >Agregar Actor</a>
          <!-- <button type="button" class="btn btn-primary">Agregar Actor</button> -->
          <br><br>
        </div>
        

        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endSection