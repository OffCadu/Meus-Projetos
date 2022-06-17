<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\PessoaFisica;
use App\Models\Telefone;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $funcionarios = Funcionario::with(['pessoaFisica'])->paginate(10);

        return view('app.funcionario.index', ['funcionarios' => $funcionarios, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Users::all();
        return view('app.funcionario.create', ['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Users $user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {

        $regras = [
            'clt' => 'required|min:11|max:11',
            'salario' => 'required|min:5|max:11',
            'grau_instrucao' => 'required|min:4|max:2000',
            'cpf' => 'required|min:11|max:11',
            'identidade' => 'required|min:7|max:10',
            'uf' => 'required|min:2|max:2',
            'telefone' => 'required|min:10|max:11',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cpf.min' => 'O campo nome deve ter no mínimo 11 caracteres',
            'cpf.max' => 'O campo nome deve ter no máximo 11 caracteres',
            'identidade.min' => 'O campo descrição deve ter no mínimo 7 caracteres',
            'identidade.max' => 'O campo descrição deve ter no máximo 7 caracteres',
            'uf.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'uf.max' => 'O campo descrição deve ter no máximo 2 caracteres',
            'telefone.min' => 'O campo telefone deve ter no mínimo 10 caracteres',
            'telefone.max' => 'O campo telefone deve ter no máximo 11 caracteres',
            'clt.min' => 'O campo clt deve ter no mínimo 11 caracteres',
            'clt.max' => 'O campo clt deve ter no máximo 11 caracteres',
            'salario.min' => 'O campo salário deve ter no mínimo 5 caracteres',
            'salario.max' => 'O campo salário deve ter no máximo 11 caracteres',
            'grau_instrucao.min' => 'O campo grau de instrução deve ter no mínimo 4 caracteres',
            'grau_instrucao.max' => 'O campo grau de instrução deve ter no máximo 2000 caracteres',
        ];
        //dd($request);
        $request->validate($regras, $feedback);



        // PessoaFisica::create($request->only('user_id', 'cpf', 'identidade','telefone', 'uf', 'data_nascimento'));

        //$userId = Auth::user()->id;

        $pessoaFisica = new PessoaFisica();
        $pessoaFisica->user_id = $request->user_id;
        $pessoaFisica->cpf = $request->cpf;
        $pessoaFisica->identidade = $request->identidade;
        $pessoaFisica->uf = $request->uf;
        $pessoaFisica->data_nascimento = $request->data_nascimento;
        $pessoaFisica->telefone = $request->telefone;
        //dd($pessoaFisica);
        $pessoaFisica->save();


        $pessoaFisicaId = $pessoaFisica->id;

        $funcionario = new Funcionario();
        $funcionario->pessoa_fisica_id = $pessoaFisicaId;
        $funcionario->clt = $request->clt;
        $funcionario->salario = $request->salario;
        $funcionario->grau_instrucao = $request->grau_instrucao;
        $funcionario->data_admissao = $request->data_admissao;
        //dd([$funcionario, $pessoaFisica]);
        $funcionario->save();

        //PessoaFisica::create($request->all());
        //Funcionario::create($request->only('pessoa_fisica_id', 'clt', 'salario', 'grau_instrucao', 'data_admissao'));
        // $user->atendente=true;
        // $user->save();

        return redirect()->route('funcionario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        return view('app.funcionario.show', ['funcionario' => $funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario, PessoaFisica $pessoa_fisica, User  $user)
    {
        return view('app.funcionario.edit', ['funcionario' => $funcionario, 'pessoa_fisica' => $pessoa_fisica, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionario  $funcionario
     * @param  \App\Models\PessoaFisica $pessoaFisica
     * @param  \App\Models\Users $user
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario, PessoaFisica $pessoaFisica, User $user)
    {
        $regras = [
            'clt' => 'required|min:11|max:11',
            'salario' => 'required|min:5|max:11',
            'grau_instrucao' => 'required|min:4|max:2000',
            'cpf' => 'required|min:11|max:11',
            'identidade' => 'required|min:7|max:10',
            'uf' => 'required|min:2|max:2',
            'telefone' => 'required|min:10|max:11',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cpf.min' => 'O campo nome deve ter no mínimo 11 caracteres',
            'cpf.max' => 'O campo nome deve ter no máximo 11 caracteres',
            'identidade.min' => 'O campo descrição deve ter no mínimo 7 caracteres',
            'identidade.max' => 'O campo descrição deve ter no máximo 7 caracteres',
            'uf.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'uf.max' => 'O campo descrição deve ter no máximo 2 caracteres',
            'telefone.min' => 'O campo telefone deve ter no mínimo 10 caracteres',
            'telefone.max' => 'O campo telefone deve ter no máximo 11 caracteres',
            'clt.min' => 'O campo clt deve ter no mínimo 11 caracteres',
            'clt.max' => 'O campo clt deve ter no máximo 11 caracteres',
            'salario.min' => 'O campo salário deve ter no mínimo 5 caracteres',
            'salario.max' => 'O campo salário deve ter no máximo 11 caracteres',
            'grau_instrucao.min' => 'O campo grau de instrução deve ter no mínimo 4 caracteres',
            'grau_instrucao.max' => 'O campo grau de instrução deve ter no máximo 2000 caracteres',
        ];

        $request->validate($regras, $feedback);

        $funcionario->update($request->all());
        $pessoaFisica->update($request->all());
        $user->update($request->only('name', 'email', 'atendente'));

        return redirect()->route('funcionario.index', ['funcionario' => $funcionario, 'pessoa_fisica' => $pessoaFisica, 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionario.index');
    }
}
