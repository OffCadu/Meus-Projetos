@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
    <!-- slider Area End-->
    
    <!-- Inicio quartos lista view -->
    <div class="informacao-pagina">
      <div style="width: 90%; margin-left: auto; margin-right: auto;">
          <table border="0" width="100%">
              <thead>
                <h2>Disponibilidade</h2>
                  <tr>
                    <th>Quartos</th>
                    <th>Disponibilidade</th>
                  </tr>

                  <tr>
                    <td>01</td>
                    <td>Ocupado</td>
                  </tr>

                  <tr>
                    <td>02</td>
                    <td>Ocupado</td>
                  </tr>

                  <tr>
                    <td>03</td>
                    <td>Livre</td>
                  </tr>

                  <tr>
                    <td>04</td>
                    <td>Livre</td>
                  </tr>

                  <tr>
                    <td>05</td>
                    <td>Livre</td>
                  </tr>

                  <tr>
                    <td>06</td>
                    <td>Ocupado</td>
                  </tr>
              </thead>
          </table>
<!-- Fim quartos lista view -->
       
    </main>
    @include('layouts._partials.footer')
@endsection
