<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paciente.index');
    }
    
    public function nuevoPaciente()
    {
        return view('paciente.nuevo');
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
        $paciente=new Paciente();
        $paciente->ci=$request->input('ci');
        $paciente->nombre=$request->input('nombre');
        $paciente->apellido=$request->input('apellido');
        $paciente->fechanac=$request->input('fechanac');
        $paciente->edad=$request->input('edad');
        $paciente->fechaingreso=$request->input('fechaingreso');
        $paciente->codigo=$request->input('codigo');
        $paciente->direccion=$request->input('direccion');
        $paciente->medico=$request->input('medico');
        $paciente->Estado="activo";
        $paciente->save();
        
        return redirect()->route('paciente.index');
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
