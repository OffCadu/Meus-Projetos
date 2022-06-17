<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD:PIM_IV/app/Http/Controllers/QuartoController.php
class QuartoController extends Controller
=======
class BalconistaController extends Controller
>>>>>>> 157c4c378e2a228bfcdba3b69cda52bdbc0c06ee:PIM_IV/app/Http/Controllers/BalconistaController.php
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:PIM_IV/app/Http/Controllers/QuartoController.php
        $atendente = false;
        $gerente = false;
        // $pessoa_fisica='';
        $nome = '';
        if(isset(Auth::user()->name)) {
            $nome = Auth::User()->name;
            // $pessoa_fisica = Auth::User()->id;
            // $atendente = Auth::User()->atendente;
            $gerente = Auth::User()->gerente;
            $atendente = Auth::user()->atendente;
        }else{
            $nome = '';
        }

    return view('app.quarto.index', ['request' => $request, 'atendente' => $atendente, 'nome' => $nome, 'gerente' => $gerente]);
=======
         return view('balconista');

>>>>>>> 157c4c378e2a228bfcdba3b69cda52bdbc0c06ee:PIM_IV/app/Http/Controllers/BalconistaController.php
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
        //
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
