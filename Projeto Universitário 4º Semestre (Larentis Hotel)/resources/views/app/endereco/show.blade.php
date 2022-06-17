@extends('layouts.basico')

@section('conteudo')

    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Visualizar Endereço</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('endereco.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left">
                    <tr>
                        <td>ID</td>
                        <td>{{ $enderecos->id }}</td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td>{{ $enderecos->cidade ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Rua</td>
                        <td>{{ $enderecos->rua ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>CEP</td>
                        <td>{{ $enderecos->cep }}</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>{{ $enderecos->estado }}</td>
                    </tr>
                    <tr>
                        <td>nº</td>
                        <td>{{ $enderecos->numero ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Complemento</td>
                        <td>{{ $enderecos->complemento }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
