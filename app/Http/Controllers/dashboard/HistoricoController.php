<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Equipo;
use App\Models\Historico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoricoPost;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicos = Historico::get();
   
        return view('historico.index',['historicos'=>$historicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historico.crear',['historicos' => new Historico()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoricoPost $request)
    {
        Historico::create($request->validated());

        return back()->with('status', 'PRESTAMO REGISTRADO CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historicos = Historico::find($id);

        return view('historico.show',['historicos' => $historicos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historicos = Historico::find($id);

        return view('historico.edit',['historicos' => $historicos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreHistoricoPost $request, $id)
    {
        $historicos = Historico::find($id);

    
        $historicos->update($request->validated());

        return back()->with('status', 'PRESTAMO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historicos = Historico::find($id);

    
        $historicos->delete();

        return back()->with('status', 'PRESTAMO ELIMINADO CON EXITO');
    }
}
