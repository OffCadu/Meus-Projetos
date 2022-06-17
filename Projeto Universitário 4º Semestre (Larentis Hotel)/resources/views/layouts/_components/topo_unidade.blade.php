<header>

    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo" style="margin-right: 30px">
                            <a href="/"><img src="../../assets/img/logo/logo.png" height="80px" alt=""></a>
                        </div>
                    </div>
                <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="#sobre">Sobre</a></li>
                                    <li><a href="#quartos">Quartos</a></li>
                                    <li><a href="#services">Serviços</a></li>
                                    <li><a href="/contatos">Contatos</a></li>
                                    {{$slot}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="/pessoa_fisica/create" class="btn btn1 d-none d-lg-block ">Reserve online</a>

                        </div>
                        {{-- <div class="main-menu f-right ">
                        </div> --}}
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
