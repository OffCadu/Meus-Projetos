@extends('layouts.basico')

@section('conteudo')

    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Visualizar Pessoas Físicas</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pessoa_fisica.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left">
                    <tr>
                        <td>ID:</td>
                        <td>{{ $pessoa_fisica->user_id }}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $pessoa_fisica->user->name ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $pessoa_fisica->user->email ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td>{{ $pessoa_fisica->cpf }}</td>
                    </tr>
                    <tr>
                        <td>Identidade:</td>
                        <td>{{ $pessoa_fisica->identidade }}</td>
                    </tr>
                    <tr>
                        <td>UF:</td>
                        <td>{{ $pessoa_fisica->uf }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
