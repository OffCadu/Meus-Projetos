@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_balconista', ['func_role' => 'Balconista','func_name' => 'márcia'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
    <!-- slider Area End-->
    
    <!-- Inicio Tesouraria view -->
    <!-- Inicio Reserva -->
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                            <form action="{{route('balconista_add_consumo')}}" method="post">
                                @csrf
                                <div class="form-header">
                                    <h2>Adição de consumo</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Quarto</span>
                                            <input class="form-control" type="date" id="quarto" name="quarto" value="{{ old('quarto')}}">
                                            {{ $errors->has('quarto') ? $errors->first('quarto') : '' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Produto</span>
                                            <select name="produto">
                                                <option value="">Qual o produto consumido?</option>
                                        
                                                @foreach($produto as $key => $produto)
                                                    <option value="{{$produto->id}}" {{ old('produto') == $produto->id ? 'selected' : '' }}>{{$produto->nome_produto}}</option>
                                                @endforeach
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Quantidade consumida:</span>
                                            <select class="form-control" name="produto_quantidade">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-btn">
                                        <button class="submit-btn">adicionar consumo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- FIM RESERVA-->
<!-- Fim Tesouraria view -->
       
    </main>
    @include('layouts._partials.footer')
@endsection
