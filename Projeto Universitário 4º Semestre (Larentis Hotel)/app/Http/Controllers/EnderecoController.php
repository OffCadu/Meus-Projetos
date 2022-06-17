<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $enderecos = Endereco::paginate(10);

        return view('app.endereco.index', ['enderecos' => $enderecos, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.endereco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'cidade' => 'required|min:2|max:40',
            'rua' => 'required|min:2|max:40',
            'cep' => 'required|min:8|max:8',
            'estado' => 'required|min:2|max:2',
            'numero' => 'required|min:1|max:15',
            'complemento' => 'required|min:2|max:150'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cidade.min' => 'O campo cidade deve ter no mínimo 3 caracteres',
            'cidade.max' => 'O campo cidade deve ter no máximo 40 caracteres',
            'rua.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'rua.min' => 'O campo cidade deve ter no mínimo 40 caracteres',
            'cep.max' => 'O campo cidade deve ter no máximo 8 caracteres',
            'cep.min' => 'O campo descrição deve ter no mínimo 8 caracteres',
            'estado.min' => 'O campo cidade deve ter no mínimo 2 caracteres',
            'estado.max' => 'O campo cidade deve ter no máximo 2 caracteres',
            'numero.min' => 'O campo descrição deve ter no mínimo 1 caracteres',
            'numero.max' => 'O campo descrição deve ter no máximo 15 caracteres',
            'complemento.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'complemento.max' => 'O campo descrição deve ter no máximo 150 caracteres'
        ];

        $request->validate($regras, $feedback);

        enderecos::create($request->all());
        return redirect()->route('endereco.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(Endereco $endereco)
    {
        return view('app.endereco.show', ['endereco' => $endereco]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit(Endereco $endereco)
    {
        return view('app.endereco.edit', ['enderecos' => $endereco]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endereco $endereco)
    {
        $regras = [
            'cidade' => 'required|min:2|max:40',
            'rua' => 'required|min:2|max:40',
            'cep' => 'required|min:8|max:8',
            'estado' => 'required|min:2|max:2',
            'numero' => 'required|min:1|max:15',
            'complemento' => 'required|min:2|max:150'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cidade.min' => 'O campo cidade deve ter no mínimo 3 caracteres',
            'cidade.max' => 'O campo cidade deve ter no máximo 40 caracteres',
            'rua.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'rua.min' => 'O campo cidade deve ter no mínimo 40 caracteres',
            'cep.max' => 'O campo cidade deve ter no máximo 8 caracteres',
            'cep.min' => 'O campo descrição deve ter no mínimo 8 caracteres',
            'estado.min' => 'O campo cidade deve ter no mínimo 2 caracteres',
            'estado.max' => 'O campo cidade deve ter no máximo 2 caracteres',
            'numero.min' => 'O campo descrição deve ter no mínimo 1 caracteres',
            'numero.max' => 'O campo descrição deve ter no máximo 15 caracteres',
            'complemento.min' => 'O campo descrição deve ter no mínimo 2 caracteres',
            'complemento.max' => 'O campo descrição deve ter no máximo 150 caracteres'
        ];

        $request->validate($regras, $feedback);

        $endereco->update($request->all());

        return redirect()->route('endereco.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endereco $endereco)
    {
        $endereco->delete();
        return redirect()->route('endereco.index');
    }
}
