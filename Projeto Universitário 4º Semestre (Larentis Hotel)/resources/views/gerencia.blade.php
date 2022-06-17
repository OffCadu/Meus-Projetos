@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_gerencia', ['func_role' => 'Gerente','func_name' => 'Gabriela'])
@endcomponent

    <main>

    @include('layouts._partials.view_gerente', ['atendente' => $atendente,  'gerente' => $gerente])

    </main>
    @include('layouts._partials.footer')
@endsection
