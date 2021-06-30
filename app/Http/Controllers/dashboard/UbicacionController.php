<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Ubicacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUbicacionPost;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicaciones = Ubicacion::get();
   
        return view('ubicacion.index',['ubicacion'=>$ubicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ubicacion.crear',['ubicacion' => new Ubicacion()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUbicacionPost $request)
    {
        Ubicacion::create($request->validated());

        return back()->with('status', 'UBICACION REGISTRADA CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicaciones = Ubicacion::find($id);

        return view('ubicacion.show',['ubicaciones' => $ubicaciones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubicaciones = Ubicacion::find($id);

        return view('ubicacion.edit',['ubicaciones' => $ubicaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUbicacionPost $request, $id)
    {
        $ubicaciones = Ubicacion::find($id);

    
        $ubicaciones->update($request->validated());

        return back()->with('status', 'UBICACION ACTUALIZADA CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubicaciones = Ubicacion::find($id);

        $ubicaciones->delete();
        
        return back()->with('status', 'UBICACION ELIMINADA CON EXITO');
    }
}
