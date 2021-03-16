<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Horario;
use App\Models\Dia;
use App\Models\MedicoHorario;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cita.index');
    }

    public function historial()
    {
        return view('cita.historial');
    }

    public function notificacion()
    {
        return view('cita.notificacion');
    }

    public function reserva()
    {
        return view('cita.reserva');
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
        $iddia=$request->get('dia');
        $idhorario=$request->get('hora');
        $fecha=$request->get('fecha');
        $sms="Saludos";
        $horario=MedicoHorario::where('iddia','=',$iddia)->where('idhorario','=',$idhorario)->where('estado','=','activo')->get();
        if(count($horario)>0){
            $cita=Cita::where('fecha','=',$fecha)->where('estado','=','activo')->get();
            if($fecha==null){
                $cita=new Cita();
                $cita->fecha=$request->get('fecha');
                $cita->idcliente=$request->get('idcliente');
                $cita->idmedico=1;
                $cita->idhorario=$request->get('hora');
                $cita->idmedicohorario=$request->get('idmedicohorario');
                $cita->estado="activo";
                $cita->save();
                $sms=$sms+"La fecha seleccionada esta disponible";
                return redirect()->route('cita.index')->with($sms);
            }else{
                $sms=$sms+"La fecha seleccionada ya esta ocupada";
                return redirect()->route('cita.index')->with($sms);
            }
            
        }else{
            $sms=$sms+"Verfifique el horario disponible";
            return redirect()->route('cita.index')->with($sms);
        }
        
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
