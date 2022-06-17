<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function gerente(){
        return'Autenticação de gerente executada com sucesso!';
    }
    
    public function atendente(){
        return'Autenticação de atendente executada com sucesso!';
    }
    
    public function hospede(){
        return'Autenticação de hospede executada com sucesso!';
    }

}
