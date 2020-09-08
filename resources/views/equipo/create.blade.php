@extends('layouts.base')

@section('content')

    <h1 class="alert alert-success text-center">Nuevo jugador</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/equipos" class="btn btn-danger">Atrás</a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <form action="/equipos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input type="number" class="form-control" id="codigo" name="codigo">
                </div>
                <div class="form-group">
                    <label for="nombrejugador">Nombre</label>
                    <input type="text" class="form-control" id="nombrejugador" name="nombrejugador">
                </div>
                <div class="form-group">
                    <label for="equipojugador">Equipo</label>
                    <input type="text" class="form-control" id="equipojugador" name="equipojugador">
                </div>
                <button type="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

@endsection

