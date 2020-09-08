<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipo.index',[
            'equipos'=> Equipo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->codigo = $request->get('codigo');
        $equipo->nombre_jugador = $request->get('nombrejugador');
        $equipo->equipo_jugador = $request->get('equipojugador');

        $equipo->save();
        return redirect('/equipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('equipo.edit',[
            'equipo'=> $equipo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipo= Equipo::find($id);
        $equipo->codigo = $request->post('codigo');
        $equipo->nombre_jugador = $request->get('nombrejugador');
        $equipo->equipo_jugador = $request->get('equipojugador');
        $equipo->save();

        return redirect('/equipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
       $equipo->delete();
       return back(); 
    }
}
