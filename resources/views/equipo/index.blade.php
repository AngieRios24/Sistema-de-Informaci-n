@extends('layouts.base')

@section('content')
<div class="row">
     <div class="col">
         <h1>Jugadores</h1>
    </div>
</div>
<div class="row">
     <div class="col text-right">
         <a href="/equipos/create" class="btn btn-primary">Jugador Nuevo</a>
    </div>
</div>
<br>
<div class="row">
     <div class="col">
             <table class="table table-bordered table-striped">
                 <thead>
                         <th>Codigo</th>
                         <th>Nombre Jugador</th>
                         <th>Equipo Jugador</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                 </thead>
                 <tbody>
                     @foreach ($equipos as $equipo)
                         <tr>
                             <td>{{$equipo->codigo}}</td>
                             <td>{{$equipo->nombre_jugador}}</td>
                             <td>{{$equipo->equipo_jugador}}</td>
                             <td>
                                <a class="btn btn-success" href="/equipos/{{$equipo->id}}/edit">Edit</a>
                             </td>
                             <td>
                                 <form action="{{route('equipos.destroy', $equipo)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        class="btn btn-danger"
                                        value="Delete"
                                        onclick="return confirm('¿Esta seguro que desea eliminar el recurso?')"
                                    />
                                </form>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
@endsection
  

