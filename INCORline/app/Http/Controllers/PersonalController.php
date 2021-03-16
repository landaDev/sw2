<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Medico;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personal.index');
    }

    public function nuevoPersonal()
    {
        return view('personal.nuevo');
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

        //   $medico=new Medico();
        //   $medico->especialidad="Pediatra";
        //   $medico->ci=$request->input('ci');
        //   $idusuarioget=Usuario::select('idusuario')->latest('idusuario')->first();
        //   $medico->idusuario=$idusuarioget->idusuario;
        //   $medico->fechaNac=$request->input('fechanac');
        //   $medico->direccion=$request->input('direccion');
        //   $medico->save();

        //return redirect()->route('personal.index');
        
        ///get devuelve el id    input el string
        // $usuario=$request->get('grupousuario');
        // echo $usuario;
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
