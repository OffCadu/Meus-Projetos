@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_gerencia', ['func_role' => 'Gerente','func_name' => 'Gabriela'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
    <!-- slider Area End-->
    
    <!-- Inicio Tesouraria view -->
        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>financeiro</h3>
                            </div>
                            <h3 class="archivment-back">financeiro</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Room -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/financeiro.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">ver lista de gastos</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>190 <span>/ diária<br>Esta suíte possui vista para a piscina, cama de casal, Tv a cabo e ar-condicionado.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Room -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/financeiro.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">ver lista de lucros</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>120 <span>/ diária<br> Esta suíte possui vista para o mar, duas cama de solteiro, frigobar e TV a cabo. </span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Room -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/financeiro.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">ver saldo mensal</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>150 <span>/ diária<br>Esta suíte possui frigobar, ar-condicionado, cama de casal, TV a cabo e mesa de jantar.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/financeiro.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">ver saldo anual</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>140 <span>/ diária<br>Esta suíte possui vista para área de lazer, TV a cabo, ar-condicionado, frigobar.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->
    <!-- Fim Tesouraria view -->
       
    </main>
    @include('layouts._partials.footer')
@endsection
