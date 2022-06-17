@extends('layouts.basico')

@section('conteudo')

    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Visualizar Funcionário</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('funcionario.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left">
                    <tr>
                        <td>ID:</td>
                        <td>{{ $funcionario->id }}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $funcionario->pessoa_fisica->user->name ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $funcionario->pessoa_fisica->user->email ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td>{{ $funcionario->pessoa_fisica->cpf ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Identidade:</td>
                        <td>{{ $funcionario->pessoa_fisica->identidade ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>UF:</td>
                        <td>{{ $funcionario->pessoa_fisica->uf ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>{{ $funcionario->pessoa_fisica->telefone ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>CLT:</td>
                        <td>{{ $funcionario->clt }}</td>
                    </tr>
                    <tr>
                        <td>Salário:</td>
                        <td>{{ $funcionario->salario }}</td>
                    </tr>
                    <tr>
                        <td>Grau de instrução:</td>
                        <td>{{ $funcionario->grau_instrucao}}</td>
                    </tr>
                    <tr>
                        <td>Data de admissao:</td>
                        <td>{{ $funcionario->pessoa_fisica->user->name ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Ativo:</td>
                        <td>{{ $funcionario->ativo }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
