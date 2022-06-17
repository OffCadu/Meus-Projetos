@extends('layouts.basico')

@section('conteudo')
    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'GABRIELLA'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Adicionar Endereço</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="/gasto">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.endereco._components.form_create_edit')
                @endcomponent
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
