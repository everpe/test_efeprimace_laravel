@extends('layouts.app')

@section('content')

<div class="text-center mt-4 mb-4">
<h3>Registro de nuevo Actor</h3>
<br>
    <div class="card mx-auto " style="width:50%">
        <form class="form-group"  method="POST" action="{{ url('/actors')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">    
                    <div class="col">
                        <label for=""> <b> Nombres</b>  </label>
                        <input type="text" name="first_name" class="form-control">
                    </div> 
                </div>  
                <br><br>
                <div class="row">
                    <div class="col">
                        <label for=""><b>Apellidos</b></label>
                        <input type="text"  name="last_name" id="last_name" class="form-control">
                    </div>
                 </div>    
            </div>

            
            <br><br>
            <button type="submit"  class="btn btn-success">Guardar</button>
        </form>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('films.index') }}" type="button" class="btn btn-dark" >Volver</a>
        <br><br><br>
    </div>
</div>


@endsection