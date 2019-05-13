<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroSocio;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;

class RegistrosSociosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return view('socios_registro.socios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socios_registro.socioform_registro');
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

            'nombre' => 'required', 
            'apellidos' => 'required',
            'tel' => 'required',  
            'email' => 'required|email|unique:registro_socios',
            'password' => 'required'
            
            ]
        );
        RegistroSocio::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellidos'],
            'telefono' => $data['tel'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
 
        ]);
       return redirect('/Inicia_Sesion')
              ->with('success', 'Registro completado exitosamente');
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
