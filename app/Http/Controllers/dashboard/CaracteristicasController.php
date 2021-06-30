<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Models\Caracteristica;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCaracteristicaPost;

class CaracteristicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicas = Caracteristica::get();
   
        return view('caracteristicas.index',['caracteristicas'=>$caracteristicas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caracteristicas.crear',['caracteristicas' => new Caracteristica()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaracteristicaPost $request)
    {
        Caracteristica::create($request->validated());

        return back()->with('status', 'EQUIPO REGISTRADA CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caracteristicas = Caracteristica::find($id);

        return view('caracteristicas.show',['caracteristicas' => $caracteristicas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caracteristicas = Caracteristica::find($id);
        return view('caracteristicas.edit',['caracteristicas' => $caracteristicas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCaracteristicaPost $request, $id)
    {
        $caracteristicas = Caracteristica::find($id);

    
        $caracteristicas->update($request->validated());

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
        $caracteristicas = Caracteristica::find($id);

        $caracteristicas->delete();
        
        return back()->with('status', 'CLIENTE ELIMINADO CON EXITO');
    }
}
