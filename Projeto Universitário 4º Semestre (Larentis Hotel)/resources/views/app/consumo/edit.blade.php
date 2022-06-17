@extends('layouts.basico')

@section('conteudo')
    @component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
    @endcomponent

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p class="cor-fonte">Editar Funcionário</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('consumo.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.consumo._components.form_create_edit', ['consumo' => $consumo])
                @endcomponent
            </div>
        </div>

    </div>
    @include('layouts._partials.footer')
@endsection
