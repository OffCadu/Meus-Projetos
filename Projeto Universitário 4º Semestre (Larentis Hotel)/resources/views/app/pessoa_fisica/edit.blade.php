@extends('layouts.basico')

@section('conteudo')
    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Editar Usuários</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pessoa_fisica.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.pessoa_fisica._components.form_create_edit', ['pessoa_fisica' => $pessoa_fisica])
                @endcomponent
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection

