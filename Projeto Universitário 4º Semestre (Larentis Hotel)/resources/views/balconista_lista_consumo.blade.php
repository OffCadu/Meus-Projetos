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
                <h2>Tabela de consumo</h2>
                  <tr>
                    <th>CPF</th>
                    <th>ID do produto</th>
                    <th>Quantidade</th>
                  </tr>

                  <tr>
                    <td>000.000.000-0</td>
                    <td>05</td>
                    <td>1</td>
                  </tr>

                  <tr>
                    <td>000.000.000-0</td>
                    <td>03</td>
                    <td>5</td>
                  </tr>

                  <tr>
                    <td>000.000.000-0</td>
                    <td>01</td>
                    <td>2</td>
                  </tr>

                  <tr>
                    <td>000.000.000-0</td>
                    <td>09</td>
                    <td>10</td>
                  </tr>
              </thead>
          </table>
<!-- Fim quartos lista view -->
       
    </main>
    @include('layouts._partials.footer')
@endsection
