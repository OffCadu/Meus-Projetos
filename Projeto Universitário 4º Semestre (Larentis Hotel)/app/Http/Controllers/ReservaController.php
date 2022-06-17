<?php

namespace App\Http\Controllers;

use App\Models\PessoaFisica;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/reserva');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = '';

        if($request->input('_token') != ''){
        $regras=[
            'check_in'=>'required|after:today|before:check_out',
            'check_out'=>'required|after:today|after:check_in'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'check_in.after' => 'A data do check-in não pode ser anterior ao dia de hoje',
            'check_in.before' => 'A data do check-in não pode ser posterior à data do check-out',
            'check_out.after' => 'A data do check-out não pode ser anterior ao dia de hoje e nem à data do check-in',
        ];
        $pessoaFisicaId = Auth::user()->id;
        $request->validate($regras, $feedback);
        $reserva = new Reserva();
        $reserva->pessoa_fisica_id = $pessoaFisicaId;
        $reserva->check_in = $request->check_in;
        $reserva->check_out = $request->check_out;
        $reserva->adultos = $request->adultos;
        $reserva->criancas = $request->criancas;
        $reserva->save();

        $msg = 'Reserva realizada com sucesso';

    }

        return view('/', ['msg' => $msg]);
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
