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
                <li><a href="{{ route('quarto.create') }}">Novo</a></li>
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
                            <th>Lotação</th>
                            <th>Valor da Diária</th>
                            <th>Tamanho em m²</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($quartos as $quarto)
                            <tr>
                                <td>{{ $quarto->id }}</td>
                                <td>{{ $quarto->nome}}</td>
                                <td>{{ $quarto->lotacao}}</td>
                                <td>{{ $quarto->valor_diaria }}</td>
                                <td>{{ $quarto->tamanho_m2 }}</td>
                                <td><a href="{{ route('quarto.show', ['quarto' => $quarto->id ]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$quarto->id}}" method="post" action="{{ route('quarto.destroy', ['quarto' => $quarto->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$quarto->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('quarto.edit', ['quarto' => $quarto->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                {{ $quartos->appends($request)->links() }}

                <!--
                <br>
                {{ $quartos->count() }} - Total de registros por página
                <br>
                {{ $quartos->total() }} - Total de registros da consulta
                <br>
                {{ $quartos->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $quartos->lastItem() }} - Número do último registro da página

                -->
                <br>
                Exibindo {{ $quartos->count() }} quartos de {{ $quartos->total() }} (de {{ $quartos->firstItem() }} a {{ $quartos->lastItem() }})
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
