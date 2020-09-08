@extends('layouts.base')

@section('content')
 <div class="row">
     <div class="col">
         <h1>Editar Jugador{{$equipo->id}}</h1>
     </div>
 </div>
 <div class="row">
     <div class="col">
         <a href="/equipos" class="btn btn-danger">Atras</a>
     </div>
 </div>
 <br> <br>
 <div class="row">
        <div class="col">
            <form action="/equipos/{{$equipo->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Cdoigo Jugador"
                    value="{{$equipo->codigo}}" >
                </div>
                <div class="form-group">
                    <label for="nombrejugador">Nombre</label>
                    <input type="text" class="form-control" id="nombrejugador" name="nombrejugador" placeholder="Nombre Jugador"
                    value="{{$equipo->nombre_jugador}}">
                </div>
                <div class="form-group">
                    <label for="equipojugador">Equipo</label>
                    <input type="text" class="form-control" id="equipojugador" name="equipojugador" placeholder="Equipo Jugador"
                    value="{{$equipo->equipo_jugador}}">
                </div>
                <button type="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

   

@endsection

