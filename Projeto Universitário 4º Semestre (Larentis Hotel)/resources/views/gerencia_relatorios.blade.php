@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_gerencia', ['func_role' => 'Gerente','func_name' => 'Gabriela'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
    <!-- slider Area End-->
    
    <!-- Inicio Tesouraria view -->
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                            <form>
                                <div class="form-header">
                                    <h2>Faça já sua reserva!</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Check-In</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Check-Out</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Adultos</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Crianças</span>
                                            <select class="form-control">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">E-mail</span>
                                    <input class="form-control" type="email" placeholder="Digite seu E-mail">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Telefone</span>
                                    <input class="form-control" type="tel" placeholder="Digite seu telefone">
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Reserve já!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fim Tesouraria view -->
       
    </main>
    @include('layouts._partials.footer')
@endsection
