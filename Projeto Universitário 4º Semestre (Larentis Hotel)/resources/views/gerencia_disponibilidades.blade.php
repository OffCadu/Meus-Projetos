@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_gerencia', ['func_role' => 'Gerente','func_name' => 'Gabriela'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
    <!-- slider Area End-->
    
    <!-- Inicio quartos lista view -->
    <head>
      <style>
        table {
            margin-top: 10px;
            margin-bottom: 30px;            
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover{background-color:#f5f5f5}
      </style>
    </head>
    
        <body>
        
        <h2>Tabela de consumo</h2>
        
        <table>
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
        </table>
        
        </body>
<!-- Fim quartos lista view -->
       
    </main>
    @include('layouts._partials.footer')
@endsection
