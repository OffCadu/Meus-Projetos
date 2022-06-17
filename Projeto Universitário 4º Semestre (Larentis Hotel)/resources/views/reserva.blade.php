@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_login_registro', ['unidade' => 'larentisII'])
@endcomponent

    <main>

        <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
        <!-- slider Area End-->

    <!-- Inicio Reserva -->
    <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                                <form action="{{route('reserva.store')}}" method="post">
                                    @csrf
                                    <div class="form-header">
                                        <h2>Faça já sua reserva!</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Check-In</span>
                                                <input class="form-control" type="date" id="check_in" name="check_in" value="{{ old('check_in')}}">
                                                {{ $errors->has('check_in') ? $errors->first('check_in') : '' }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Check-Out</span>
                                                <input class="form-control" type="date" id="check_out" name="check_out" value="{{ old('check_out')}}">
                                                {{ $errors->has('check_out') ? $errors->first('check_out') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label_2">Adultos</span>
                                                <select class="form-control_2" name="adultos">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label_2">Crianças</span>
                                                <select class="form-control_2" name="criancas">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
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
    <!-- FIM RESERVA-->
    </main>
    @include('layouts._partials.footer')
@endsection
