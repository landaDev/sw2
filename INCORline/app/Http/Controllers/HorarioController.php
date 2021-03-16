<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Dia;
use App\Models\Medico;
use App\Models\MedicoHorario;
use Illuminate\Support\Facades\DB;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sql='SELECT medicohorarios.idmedicohorario,medicohorarios.idhorario,medicohorarios.iddia,medicohorarios.estado,horarios.hora FROM medicohorarios,horarios WHERE medicohorarios.idhorario=horarios.idhorario';
        //$horarios=MedicoHorario::select('idhorario')->select('estado')->select('iddia')->select('idmedicohorario')->get();
         $tiempos=Horario::all();
        $horarios=DB::table('medicohorarios')->join('horarios','medicohorarios.idhorario','=','horarios.idhorario')->orderBy('medicohorarios.idmedicohorario')->get();
        //return $horarios;
        //return $tiempos;
        return view('horario.index',compact('tiempos'),compact('horarios'));
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
        // $medicohorario=new MedicoHorario();
        // $medicohorario->idmedico=1;
        // $medicohorario->idhorario=$request->get('hora');
        // $medicohorario->estado="activo";
        // $medicohorario->iddia=$request->get('dia');
        // $medicohorario->save();

        print_r($request->all()); 
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
