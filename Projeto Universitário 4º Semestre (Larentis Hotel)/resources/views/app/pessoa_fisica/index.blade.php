@extends('layouts.basico')

@section('conteudo')
    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Listagem de Pessoas Fisicas</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pessoa_fisica.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Identidade</th>
                            <th>UF</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($pessoa_fisicas as $pessoa_fisica)
                            <tr>
                                <td>{{ $pessoa_fisica->user_id }}</td>
                                <td>{{ $pessoa_fisica->user->name}}</td>
                                <td>{{ $pessoa_fisica->user->email}}</td>
                                <td>{{ $pessoa_fisica->cpf }}</td>
                                <td>{{ $pessoa_fisica->identidade }}</td>
                                <td>{{ $pessoa_fisica->uf }}</td>
                                <td><a href="{{ route('pessoa_fisica.show', ['pessoa_fisica' => $pessoa_fisica->id ]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$pessoa_fisica->id}}" method="post" action="{{ route('pessoa_fisica.destroy', ['pessoa_fisica' => $pessoa_fisica->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$pessoa_fisica->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('pessoa_fisica.edit', ['pessoa_fisica' => $pessoa_fisica->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                {{ $pessoa_fisicas->appends($request)->links() }}

                <!--
                <br>
                {{ $pessoa_fisicas->count() }} - Total de registros por página
                <br>
                {{ $pessoa_fisicas->total() }} - Total de registros da consulta
                <br>
                {{ $pessoa_fisicas->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $pessoa_fisicas->lastItem() }} - Número do último registro da página

                -->
                <br>
                Exibindo {{ $pessoa_fisicas->count() }} pessoas fisicas de {{ $pessoa_fisicas->total() }} (de {{ $pessoa_fisicas->firstItem() }} a {{ $pessoa_fisicas->lastItem() }})
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
