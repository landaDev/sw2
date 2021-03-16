<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Usuario;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cliente.index');
    }

    public function nuevoCliente()
    {
        return view('cliente.nuevo');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $usuario=new Usuario();
        // $usuario->nombre=$request->input('nombre');
        // $usuario->apellido=$request->input('apellido');
        // $usuario->email=$request->input('email');
        // $usuario->celular=$request->input('celular');
        // $usuario->usuario=$request->input('user');
        // $usuario->password=$request->input('contrasena');
        // $usuario->idGrupoUsuario=$request->get(grupousuario);
        // $usuario->save();

        // $cliente=new Cliente();
        // $cliente->nit=$request->input('nit');
        // $idusuarioget=Usuario::select('idusuario')->latest('idusuario')->first();
        // $cliente->idusuario=$idusuarioget->idusuario;
        // $cliente->save();

        //return redirect()->route('cliente.index');
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
