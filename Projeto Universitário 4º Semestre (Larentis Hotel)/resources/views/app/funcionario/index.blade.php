@extends('layouts.basico')

@section('conteudo')
    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Listagem de Funcionários</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('funcionario.create') }}">Novo</a></li>
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
                            <th>CLT</th>
                            <th>Salario</th>
                            <th>Grau_instrucao</th>
                            <th>telefone</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($funcionarios as $funcionario)
                            <tr>
                                <td>{{ $funcionario->pessoa_fisica_id }}</td>
                                <td>{{ $funcionario->pessoaFisica->user->name}}</td>
                                <td>{{ $funcionario->pessoaFisica->user->email}}</td>
                                {{-- <td>{{ $funcionario->pessoaFisica->user->telefones->telefone}}</td> --}}
                                <td>{{ $funcionario->clt }}</td>
                                <td>{{ $funcionario->salario }}</td>
                                <td>{{ $funcionario->grau_instrucao }}</td>
                                <td>{{ $funcionario->pessoaFisica->telefone}}</td>
                                <td><a href="{{ route('funcionario.show', ['funcionario' => $funcionario->id ]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$funcionario->id}}" method="post" action="{{ route('funcionario.destroy', ['funcionario' => $funcionario->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$funcionario->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('funcionario.edit', ['funcionario' => $funcionario->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                {{ $funcionarios->appends($request)->links() }}

                <!--
                <br>
                {{ $funcionarios->count() }} - Total de registros por página
                <br>
                {{ $funcionarios->total() }} - Total de registros da consulta
                <br>
                {{ $funcionarios->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $funcionarios->lastItem() }} - Número do último registro da página

                -->
                <br>
                Exibindo {{ $funcionarios->count() }} pessoas funcionario de {{ $funcionarios->total() }} (de {{ $funcionarios->firstItem() }} a {{ $funcionarios->lastItem() }})
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
