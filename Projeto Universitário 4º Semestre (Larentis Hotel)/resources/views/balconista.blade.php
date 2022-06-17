@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
        <!-- slider Area End-->

       <!-- Room Start -->
       @include('layouts._partials.view_atendente')
    </section>
    <!-- Room End -->
        <!-- Gallery img End-->
    </main>
    @include('layouts._partials.footer')
@endsection
