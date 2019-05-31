<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaqueteVenta;

class PaqueteVentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas_paquetes.formulario-habana');
    }

    public function create2()
    {
        return view('ventas_paquetes.formulario-trinidad');
    }

    public function create3()
    {
        return view('ventas_paquetes.formulario-viñales');
    }

    public function create4()
    {
        return view('ventas_paquetes.formulario');
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

            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'pais' => 'required',
            'ingreso' => 'required',
            'salida' => 'required',
            'personas',
            'nom_paquete' => 'required',     
            'nom_habitacion' => 'required',
            'show_nocturnos' => '',
            'tours',
            'comentario',
            'destino' => 'required' 
            
            ]
        );

        $data = request()->all();
        PaqueteVenta::create([
            'nom_cliente' => $data['nombres'],
            'ape_cliente' => $data['apellidos'],
            'correo' => $data['email'],
            'telefono' => $data['telefono'],
            'pais' => $data['pais'],
            'fecha_llegada' => $data['ingreso'],
            'fecha_salida' => $data['salida'],
            'cant_personas' => $data['personas'],
            'nom_paquete' => $data['nom_paquete'],
            'nom_habitacion' => $data['nom_habitacion'],
            'show_nocturno' => $data['show_nocturnos'],
             'tours' => $data['tours'],
            'destino' => $data['destino'],
            'comentario' => $data['comentario']
        ]);

       return redirect('/paquetes-cuba');    
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
