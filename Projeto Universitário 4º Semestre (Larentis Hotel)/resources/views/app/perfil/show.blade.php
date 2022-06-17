@extends('layouts.basico')

@section('conteudo')

    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Visualizar Quarto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('quarto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left">
                    <tr>
                        <td>ID:</td>
                        <td>{{ $quartos->id }}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $quartos->nome ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Lotação:</td>
                        <td>{{ $quartos->lotacao ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Valor da Diária:</td>
                        <td>{{ $quartos->valor_diaria }}</td>
                    </tr>
                    <tr>
                        <td>Tamanho em m²:</td>
                        <td>{{ $quartos->tamanho_m2 }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
