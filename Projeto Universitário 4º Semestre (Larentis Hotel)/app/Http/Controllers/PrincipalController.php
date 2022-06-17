<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Funcionario;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Isset_;
use App\Models\PessoaFisica;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atendente = false;
        $gerente = false;
        // $pessoa_fisica='';
        $nome = '';
        $users = Users::get('id');
        if(isset(Auth::user()->name)) {
            $nome = Auth::User()->name;
            // $pessoa_fisica = Auth::User()->id;
            // $atendente = Auth::User()->atendente;
            $gerente = Auth::User()->gerente;
            $atendente = Auth::user()->atendente;
        }else{
            $nome = '';
        }

        if(!(isset($users[0]))) {
            $user = new users();
            $user->name = 'Gerente';
            $user->email = 'gerente.larentis@gmail.com';
            $user->password = bcrypt('gerente123');
            $user->gerente = '1';
            $user->atendente = '1';
            $user->save();



            $user_a = new users();
            $user_a->name = 'Atendente';
            $user_a->email = 'atendente.larentis@gmail.com';
            $user_a->password = bcrypt('atendente123');
            $user_a->gerente = '0';
            $user_a->atendente = '1';
            $user_a->save();


            $user_h = new users();
            $user_h->name = 'Hospede';
            $user_h->email = 'hospede.larentis@gmail.com';
            $user_h->password = bcrypt('hospede123');
            $user_h->gerente = '0';
            $user_h->atendente = '0';
            $user_h->save();
        }
        

    return view('/index', ['users' => $users, 'request' => $request->all(), 'atendente' => $atendente, 'nome' => $nome, 'gerente' => $gerente]);
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
