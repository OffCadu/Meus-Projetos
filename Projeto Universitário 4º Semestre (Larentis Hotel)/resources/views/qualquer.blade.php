@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_unidade', ['hosp_name' => 'Mark'])
@endcomponent

    <main>

    <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
        <!-- slider Area End-->

        <!-- Booking Room Start-->
        @component('layouts._components.reserva_inicial', ['unidade' => 'larentis'])
        @endcomponent
        <!-- Booking Room End-->
        @include('layouts._partials.sobre_nos')
        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Nossos Quartos</h3>
                            </div>
                            <h3 class="archivment-back">Quartos</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/quarto_1.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">Suíte Vip Love</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>190 <span>/ diária<br>Esta suíte possui vista para a piscina, cama de casal, Tv a cabo e ar-condicionado.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/quarto_2.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">Classico Solteiro</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>120 <span>/ diária<br> Esta suíte possui vista para o mar, duas cama de solteiro, frigobar e TV a cabo. </span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"> <img src="../assets/img/larentisII/quarto_3.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">Suíte Casal</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>150 <span>/ diária<br>Esta suíte possui ar-condicionado, uma cama de casal, TV a cabo, frigobar e rede.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"><img src="../assets/img/larentisII/quarto_4.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">Suíte Rústica Casal</a></h3>
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
                                <a href="rooms.html"><img src="../assets/img/larentisII/quarto_5.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">Suíte Lazer</a></h3>
                                <div class="per-night">
                                    <span><u>R$</u>140 <span>/ diária<br>Esta suíte possui vista para área de lazer, TV a cabo, ar-condicionado, frigobar.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms.html"> <img src="../assets/img/larentisII/quarto_6.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms.html">Suíte Love Casal</a></h3>
                                <div class="per-night"id="services">
                                    <span><u>R$</u>140 <span>/ diária<br>Esta suíte possui ar-condicionado, frigobar, cama de casal, TV a cabo e rede.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->
                        <!-- Titulo-services  -->
                        <div class="font-back-tittle mb-45" >
                            <div class=" mt-100 archivment-front">
                                <h3>Nossos Serviços</h3>
                            </div>
                            <h3 class=" mt-100 archivment-back">Serviços</h3>
                        </div>
        <!-- Dining Start -->
        <div class="dining-area">
            <!-- Single Left img -->
            <div class="single-dining-area left-img2">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Nosso restaurante</span>
                                <h3>Jantar & Bebidas</h3>
                                <p>Possuimos um jantar magnífico e um ótimo almoço para nossos hóspedes.<br> Temos todo um espaço reservado para self-service, onde nossos hóspedes podem criar seus pratos de acordo com seus gostos.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single Right img -->
            <div class="single-dining-area right-img2">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Nossas piscinas</span>
                                <h3>Piscina</h3>
                                <p> A larentis II conta com duas piscinas, a central sendo mais rasa e decorada com uma ponte para travessia, com um cenário lindo, e outra sendo ao lado do restaurante, ela é destinada ao público adulto, sendo mais funda.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dining End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="../assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Depoimentos</h3>
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Pousada TOP
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Marc Rebillet, <span>Hóspede regular</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="../assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Depoimento</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Pousada do BARULHO
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Marcos Rebilico, <span>Hóspede regular</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="../assets/img/larentisII/final_page1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="../assets/img/larentisII/final_page2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="../assets/img/larentisII/final_page3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>
    @include('layouts._partials.footer')
@endsection
