<?php

namespace App\Http\Controllers;
use App\Destino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = DB::table('destinos')->get();
        return view('destinos_cuba.destinos', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinos_cuba.form_destino');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            'destino' => 'required', 
            'descripcion' => 'required',
            ]
        );
        Destino::create([
            'nombre_destino' => $data['destino'],
            'descripcion' => $data['descripcion']
 
        ]);
       return redirect('/Destino');
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
        $destino=Destino::findOrFail($id);
        return view('destinos_cuba.form_edit_destino', compact('destino'));
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
        $destino = request()->except(['_token','_method']);
        $destino = Destino::findOrFail($id);
        $destino -> nombre_destino = $request-> destino;
        $destino -> descripcion = $request-> descripcion;
        $destino -> save();
        return redirect('/Destino');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destino=Destino::findOrFail($id);
        $destino -> delete();
        return redirect('/Destino');
    }
}
