@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_reserva', ['unidade' => 'larentisII'])
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
                            <div class="booking-bg">
                            <!-- Testimonial Start -->
                                <div class="testimonial-padding">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-9 col-lg-9 col-md-9">
                                                <div class="h1-testimonial-active">
                                                    <!-- Single Testimonial -->
                                                    <div class="single-testimonial">
                                                        <!-- Testimonial tittle -->
                                                        <div class="font-back-tittle">
                                                            <div class=".quarto-reserva">
                                                                <img src="../../assets/img/larentisII/quarto_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                            <!-- Testimonial Content -->
                                                        <div class="testimonial-caption text-center">
                                                            <div class="">
                                                                <p>Quarto bem legal</p>
                                                            </div>
                                                            <p>um quarto mais bonito que qualquer outro</p>
                                                        </div>
                                                    </div>
                                                    <!-- Single Testimonial -->
                                                    <div class="single-testimonial">
                                                        <!-- Testimonial tittle -->
                                                        <div class="font-back-tittle">
                                                            <div class=".quarto-reserva">
                                                                <img src="../../assets/img/larentisII/quarto_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                            <!-- Testimonial Content -->
                                                        <div class="testimonial-caption text-center">
                                                            <div class="">
                                                                <p>Quarto bem legal</p>
                                                            </div>
                                                            <p>um quarto mais bonito que qualquer outro</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Testimonial End -->
                            </div>
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
    <!-- Booking Room End-->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="../../assets/img/larentisII/quarto_1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="../../assets/img/larentisII/quarto_5.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="../../assets/img/larentisII/quarto_3.jpg" alt=""></a>
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
