<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEquipoPost;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::get();
   
        return view('equipos.index',['equipos'=>$equipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.crear',['equipos' => new Equipo()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipoPost $request)
    {
        Equipo::create($request->validated());

        return back()->with('status', 'EQUIPO REGISTRADO CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipos = Equipo::find($id);

        return view('equipos.show',['equipos' => $equipos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipos = Equipo::find($id);
        return view('equipos.edit',['equipos' => $equipos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEquipoPost $request, $id)
    {
        $equipos = Equipo::find($id);

    
        $equipos->update($request->validated());

        return back()->with('status', 'CLIENTE ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipos = Equipo::find($id);

        $equipos->delete();
        
        return back()->with('status', 'CLIENTE ELIMINADO CON EXITO');
    }
}
