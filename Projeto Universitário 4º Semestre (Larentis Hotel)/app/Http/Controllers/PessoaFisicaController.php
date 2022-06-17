<?php

namespace App\Http\Controllers;

use App\Models\PessoaFisica;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class PessoaFisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pessoaFisicas = PessoaFisica::with(['user'])->paginate(10);

        return view('app.pessoa_fisica.index', ['pessoa_fisicas' => $pessoaFisicas, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.pessoa_fisica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $regras = [
            'cpf' => 'required|min:11|max:11',
            'identidade' => 'required|min:7|max:10',
            'uf' => 'required|min:2|max:2',
            'telefone' => 'required|min:10|max:11'

        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cpf.min' => 'O campo cpf deve ter no mínimo 11 caracteres',
            'cpf.max' => 'O campo cpf deve ter no máximo 11 caracteres',
            'identidade.min' => 'O campo identidade deve ter no mínimo 7 caracteres',
            'identidade.max' => 'O campo identidade deve ter no máximo 7 caracteres',
            'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
            'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
            'telefone.min' => 'O campo telefone deve ter no mínimo 10 caracteres',
            'telefone.max' => 'O campo telefone deve ter no máximo 11 caracteres',

        ];

        //$data['user_id'] = $request->user()->id;

        $request->validate($regras, $feedback);
        //PessoaFisica::create($request->all());

        $userId = Auth::user()->id;
        $pessoaFisica = new PessoaFisica();
        $pessoaFisica->user_id = $userId;
        $pessoaFisica->cpf = $request->cpf;
        $pessoaFisica->identidade = $request->identidade;
        $pessoaFisica->uf = $request->uf;
        $pessoaFisica->data_nascimento = $request->data_nascimento;
        $pessoaFisica->telefone = $request->telefone;
        // dd($pessoaFisica);
        $pessoaFisica->save();
        return redirect()->route('reserva.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PessoaFisica  $pessoaFisica
     * @return \Illuminate\Http\Response
     */
    public function show(PessoaFisica $pessoaFisica)
    {
        return view('app.pessoa_fisica.show', ['pessoa_fisica' => $pessoaFisica]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PessoaFisica  $pessoaFisica
     * @return \Illuminate\Http\Response
     */
    public function edit(PessoaFisica  $pessoaFisica)
    {
        $pessoaFisica = PessoaFisica::with(['user']);
        return view('app.pessoa_fisica.edit', ['pessoa_fisica' => $pessoaFisica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PessoaFisica  $pessoaFisicas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PessoaFisica $pessoaFisica)
    {
        $regras = [
            'cpf' => 'required|min:11|max:11',
            'identidade' => 'required|min:7|max:10',
            'uf' => 'required|min:2|max:2',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cpf.min' => 'O campo nome deve ter no mínimo 11 caracteres',
            'cpf.max' => 'O campo nome deve ter no máximo 11 caracteres',
            'identidade.min' => 'O campo descrição deve ter no mínimo 7 caracteres',
            'identidade.max' => 'O campo descrição deve ter no máximo 7 caracteres',
            'uf.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'uf.max' => 'O campo descrição deve ter no máximo 2 caracteres',
        ];

        $request->validate($regras, $feedback);

        $pessoaFisica->update($request->all());

        return redirect()->route('pessoa_fisica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PessoaFisica  $pessoaFisicas
     * @return \Illuminate\Http\Response
     */
    public function destroy(PessoaFisica $pessoaFisica)
    {
            $pessoaFisica->delete();
            return redirect()->route('pessoa_fisica.index');
    }
}
