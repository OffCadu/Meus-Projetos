@extends('layouts.basico')

@section('conteudo')
    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Listagem de Endereços</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('endereco.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cidade</th>
                            <th>Rua</th>
                            <th>CEP</th>
                            <th>Estado</th>
                            <th>nº</th>
                            <th>Complemento</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($enderecos as $endereco)
                            <tr>
                                <td>{{ $endereco->id }}</td>
                                <td>{{ $endereco->cidade }}</td>
                                <td>{{ $endereco->rua}}</td>
                                <td>{{ $endereco->cep }}</td>
                                <td>{{ $endereco->estado }}</td>
                                <td>{{ $endereco->numero}}</td>
                                <td>{{ $endereco->complemento }}</td>
                                <td><a href="{{ route('endereco.show', ['endereco' => $endereco->id ]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$endereco->id}}" method="post" action="{{ route('endereco.destroy', ['endereco' => $endereco->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$endereco->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('endereco.edit', ['endereco' => $endereco->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                {{ $enderecos->appends($request)->links() }}

                <!--
                <br>
                {{ $enderecos->count() }} - Total de registros por página
                <br>
                {{ $enderecos->total() }} - Total de registros da consulta
                <br>
                {{ $enderecos->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $enderecos->lastItem() }} - Número do último registro da página

                -->
                <br>
                Exibindo {{ $enderecos->count() }} Endereços de {{ $enderecos->total() }} (de {{ $enderecos->firstItem() }} a {{ $enderecos->lastItem() }})
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
