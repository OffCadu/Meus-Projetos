<!-- Room Start -->
@if($gerente)
    <section class="room-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--font-back-tittle  -->
                    <div style="padding-top:100px" class="font-back-tittle mb-45">
                        <div class="archivment-front">
                            <h3>Gerência</h3>
                        </div>
                        <h3 class="archivment-back">Gerência</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="/produto"><img src="../assets/img/larentisII/financeiro.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="/produto">Produtos</a></h3>
                            <div class="per-night">
                                <span>Acesse a lista de produtos oferecidos pelo Hotel.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="/quarto"><img src="../assets/img/larentisII/vagas.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="/quarto">Quartos</a></h3>
                            <div class="per-night">
                                <span>Acesse a lista de quartos do Hotel.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="/funcionario"> <img src="../assets/img/larentisII/analise.jpg" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="/funcionario">Funcionários</a></h3>
                            <div class="per-night">
                                <span>Acesse a lista de funcionários do Hotel.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!-- Room End -->
    @include('layouts._partials.view_atendente')
