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
                <li><a href="{{ route('consumo.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>produto_quantidade</th>
                            <th>data_consumo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($consumos as $consumo)
                            <tr>
                                <td>{{ $consumo->produto_quantidade }}</td>
                                <td>{{ $consumo->data_consumo }}</td>
                                <td><a href="{{ route('consumo.show', ['consumo' => $consumo->id ]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$consumo->id}}" method="post" action="{{ route('consumo.destroy', ['consumo' => $consumo->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$consumo->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('consumo.edit', ['consumo' => $consumo->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                {{ $consumos->appends($request)->links() }}

                <!--
                <br>
                {{ $consumos->count() }} - Total de registros por página
                <br>
                {{ $consumos->total() }} - Total de registros da consulta
                <br>
                {{ $consumos->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $consumos->lastItem() }} - Número do último registro da página

                -->
                <br>
                Exibindo {{ $consumos->count() }} pessoas consumo de {{ $consumos->total() }} (de {{ $consumos->firstItem() }} a {{ $consumos->lastItem() }})
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
