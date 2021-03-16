<?php

namespace App\Http\Controllers;
use App\Models\Receta;
use App\Models\Vacuna;
use App\Models\Metrica;
use App\Models\Padres;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('control.index');
    }

    public function metrica()
    {
        return view('control.metrica');
    }

    public function padres()
    {
        return view('control.padres');
    }

    public function receta()
    {
        return view('control.receta');
    }

    public function vacuna()
    {
        return view('control.vacuna');
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
        $paciente=$request->input('idpaciente');
        $fecha=$request->input('fecha');

        $controlmetrica=new Metrica();
        $controlmetrica->peso=$request->input('peso');
        $controlmetrica->talla=$request->input('talla');
        $controlmetrica->imc=$request->input('imc');
        $controlmetrica->fecha=$fecha;
        $controlmetrica->idpaciente=$paciente;
        $controlmetrica->save();

        $controlreceta=new Receta();
        $controlreceta->medicamento=$request->input('medicamento');
        $controlreceta->dosis=$request->input('dosis');
        $controlreceta->indicaciones=$request->input('indicaciones');
        $controlreceta->fecha=$fecha;
        $controlreceta->idpaciente=$paciente;
        $controlreceta->save();

        $controlvacuna=new Vacuna();
        $controlvacuna->fecha=$fecha;
        $controlvacuna->nombre=$request->input('nombre');
        $controlvacuna->descripcion=$request->input('descripcion');
        $controlvacuna->dosis=$request->input('dosisv');
        $controlvacuna->edad=$request->input('edad');
        $controlvacuna->idpaciente=$paciente;
        $controlvacuna->save();

       return redirect()->route('control.index');
    }

    public function guardarp(Request $request){
        $pacientePadres=$request->input('idpaciente');
        $padres=new Padres();
        $padres->nombrem=$request->input('nombrem');
        $padres->apellidom=$request->input('apellidom');
        $padres->cim=$request->input('cim');
        $padres->fechanacm=$request->input('fechanacm');
        $padres->nombrep=$request->input('nombrep');
        $padres->apellidop=$request->input('apellidop');
        $padres->cip=$request->input('cip');
        $padres->fechanacp=$request->input('fechanacp');
        $padres->telefono=$request->input('telefono');
        $padres->celularm=$request->input('celularm');
        $padres->celularp=$request->input('celularp');
        $padres->estado="activo";
        $padres->idpaciente=$pacientePadres;
        $padres->save();

        return redirect()->route('control.index');
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
