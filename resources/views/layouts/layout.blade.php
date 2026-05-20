<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', '13º BAEP')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('studiova/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="{{ asset('studiova/libs/aos-master/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('studiova/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    @stack('styles')
    <style>
        .toggle-menu,
        .toggle-menu:hover,
        .toggle-menu:focus,
        .toggle-menu:active,
        .toggle-menu:focus-visible,
        .toggle-menu.show,
        .header.fixed-header .toggle-menu,
        .header.fixed-header .toggle-menu:hover,
        .header.fixed-header .toggle-menu:focus,
        .header.fixed-header .toggle-menu:active {
            background: rgba(0,0,0,0.40) !important;
            border-color: #E9BF17 !important;
            box-shadow: 0 4px 14px rgba(0,0,0,0.50) !important;
            outline: none !important;
        }
        .header.fixed-header .toggle-menu .menu-icon {
            color: #E9BF17 !important;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}" class="logo-white">
                        <img src="{{ asset('images/logo.png') }}" alt="13º BAEP" class="img-fluid" style="max-height:70px;">
                    </a>
                    <a href="{{ route('home') }}" class="logo-dark">
                        <img src="{{ asset('images/logo.png') }}" alt="13º BAEP" class="img-fluid" style="max-height:70px;">
                    </a>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <div class="btn-group">
                        <button class="btn toggle-menu round-45 p-2 d-flex align-items-center justify-content-center rounded-circle"
                            type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"
                            style="width:45px; height:45px; background: rgba(0,0,0,0.40) !important; border: 2px solid #E9BF17 !important; box-shadow: 0 4px 14px rgba(0,0,0,0.50) !important; outline: none !important;">
                            <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8" style="color:#E9BF17;"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-4">
                            <div class="d-flex flex-column gap-6">
                                <div class="hstack justify-content-between border-bottom pb-6">
                                    <p class="mb-0 fs-5 text-dark">Menu</p>
                                    <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-column gap-3">

                                <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">
                                    <li class="header-item">
                                        <a href="{{ route('home') }}" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Home
                                        </a>
                                    </li>
                                    <li class="header-item" onmouseenter="document.getElementById('submenuInstitucional').classList.add('show')" onmouseleave="document.getElementById('submenuInstitucional').classList.remove('show')">
                                        <a href="{{ route('home') }}#institucional" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Institucional
                                            <iconify-icon icon="lucide:chevron-down" class="ms-auto fs-6 text-muted"></iconify-icon>
                                        </a>
                                        <ul class="collapse list-unstyled mb-0 mt-1 ps-3 border-start border-2" id="submenuInstitucional" style="border-color: #E9BF17 !important;">
                                            <li class="header-item">
                                                <a href="#" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Comandante
                                                </a>
                                            </li>                                            
                                            <li class="header-item">
                                                <a href="{{ asset('docs/insignia-estandarte.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Insígnia do Comandante
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/brasao.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Brasão
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/bracal.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Braçal
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/cancao.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Canção
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/challenge-coin.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Challenge Coin
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-item">
                                        <a href="{{ route('home') }}#historico" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Histórico
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="{{ route('galeria.comandantes') }}" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Galeria de Comandantes
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="{{ route('galeria.herois') }}" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Galeria de Heróis
                                        </a>
                                    </li>
                                    <li class="header-item" onmouseenter="document.getElementById('submenusubunidades').classList.add('show')" onmouseleave="document.getElementById('submenusubunidades').classList.remove('show')">
                                        <a href="#" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Unidades Subordinadas
                                            <iconify-icon icon="lucide:chevron-down" class="ms-auto fs-6 text-muted"></iconify-icon>
                                        </a>
                                        <ul class="collapse list-unstyled mb-0 mt-1 ps-3 border-start border-2" id="submenusubunidades" style="border-color: #E9BF17 !important;">
                                            <li class="header-item">
                                                <a href="#" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">K9 Bauru
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/CavalariaBauru.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">HIPO Bauru
                                            </li><li class="header-item">
                                                <a href="#" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">K9 Marília
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/cavalariaMarilia.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">HIPO Marília
                                                </a>
                                            </li>
                                            </li><li class="header-item">
                                                <a href="{{ asset('docs/k9Jahu.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">K9 Jaú
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ asset('docs/k9SantaCruzDoRioPardo.pdf') }}" target="_blank" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">K9 Santa Cruz do Rio Pardo
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-item">
                                        <a href="{{ route('home') }}#institucional" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Missão, Visão e Valores
                                        </a>
                                    </li>
                                    <li class="header-item" onmouseenter="document.getElementById('submenuvalorizacao').classList.add('show')" onmouseleave="document.getElementById('submenuvalorizacao').classList.remove('show')">
                                        <a href="#" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Valorização Militar
                                            <iconify-icon icon="lucide:chevron-down" class="ms-auto fs-6 text-muted"></iconify-icon>
                                        </a>
                                        <ul class="collapse list-unstyled mb-0 mt-1 ps-3 border-start border-2" id="submenuvalorizacao" style="border-color: #E9BF17 !important;">
                                            <li class="header-item">
                                                <a href="{{ route('home') }}#policialmes" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Policial do Mês
                                                </a>
                                            </li>
                                            <li class="header-item">
                                                <a href="{{ route('home') }}#ocorrenciasdestaque" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                    <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Ocorrência de Destaque
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-item">
                                        <a href="{{ route('home') }}#trinomio" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Trinômio Operacional
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="{{ route('home') }}#interessado-em-servir" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20" class="img-fluid animate-spin">Servir no 13º BAEP
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                    <a href="{{ url('/admin') }}" target="_blank" title="Administração" class="d-flex align-items-center justify-content-center rounded-circle" style="width:45px; height:45px; background: rgba(0,0,0,0.40); border: 2px solid #E9BF17; box-shadow: 0 4px 14px rgba(0,0,0,0.50);">
                        <iconify-icon icon="lucide:lock" style="font-size:20px; color:#E9BF17;"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Wrapper -->
     <div class="page-wrapper">
    <!-- <div class="page-wrapper overflow-x-hidden"> -->
    <!-- <div class="page-wrapper overflow-hidden"> -->
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark py-5 py-lg-11">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 mb-8 mb-xl-0 d-flex align-items-start">
                    <div class="logo">
                        <a href="https://www.policiamilitar.sp.gov.br/" target="_blank" class="logo-white">
                            <img src="{{ asset('images/logoPM2.png') }}" alt="PMESP" class="img-fluid" style="height:200px; width: auto;">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 d-none d-xl-block"></div>
                <div class="col-md-3 col-xl-2 mb-8 mb-xl-0">
                    <p class="text-white text-opacity-50 mb-3" style="font-size:16px; text-transform:uppercase; letter-spacing:1px;">Mapa do Site
                    </p>
                        <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="#">Comandante</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('galeria.comandantes') }}">Galeria de Comandantes</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/insignia-estandarte.pdf') }}" target="_blank">Insígnia do Comandante</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/brasao.pdf') }}" target="_blank">Brasão</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/bracal.pdf') }}" target="_blank">Braçal</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/cancao.pdf') }}" target="_blank">Canção</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/challenge-coin.pdf') }}" target="_blank">Challenge Coin</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('home') }}#historico">Histórico</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('home') }}#policialmes">Policial do Mês</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('home') }}#ocorrenciasdestaque">Ocorrência do Mês</a></li>
                        </ul>
                </div>
                <div class="col-md-3 col-xl-2 mb-8 mb-xl-0">
                    <p class="text-white text-opacity-50 mb-3" style="font-size:16px; text-transform:uppercase; letter-spacing:1px;">&nbsp;
                    </p>
                        <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('galeria.herois') }}">Galeria de Heróis</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/k9Bauru.pdf') }}" target="_blank">K9 Bauru</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/CavalariaBauru.pdf') }}" target="_blank">HIPO Bauru</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/k9Marilia.pdf') }}" target="_blank">K9 Marília</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/cavalariaMarilia.pdf') }}" target="_blank">HIPO Marília</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/k9Jahu.pdf') }}" target="_blank">K9 Jaú</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ asset('docs/k9SantaCruzDoRioPardo.pdf') }}" target="_blank">K9 Santa Cruz do Rio Pardo</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('home') }}#institucional">Missão, Visão e Valores</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('home') }}#trinomio">Trinômio Operacional</a></li>
                            <li><a class="link-hover text-white" style="font-size:14px; text-transform:uppercase; letter-spacing:1px;" href="{{ route('home') }}#interessado-em-servir">Servir no 13º BAEP</a></li>
                        </ul>
                </div>
                <!-- {{-- Linha separadora --}}
                <div class="footer-divider d-none d-xl-block"></div> -->
                <div class="col-md-3 col-xl-2 mb-8 mb-xl-0">
                    <p class="text-white text-opacity-50 mb-3" style="font-size:16px; text-transform:uppercase; letter-spacing:1px;">Redes Sociais</p>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li>
                                    <img src="{{ asset('images/icons/telefone.png') }}" alt="P/5" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">ADM: (14)3281-2433</span>
                            </li>
                            <li>
                                    <img src="{{ asset('images/icons/telefone.png') }}" alt="P/5" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">P/4: (14)3281-2434</span>
                            </li>
                            <li>
                                    <img src="{{ asset('images/icons/telefone.png') }}" alt="P/5" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">SPJMD: (14)3281-8908</span>
                            </li>
                            <li>
                                <a href="https://wa.me/5511969219764" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/whatsapp.png') }}" alt="P/5" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">P/5</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/5511969208814" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/whatsapp.png') }}" alt="P/5" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">SPJMD</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/13baeppmesp/" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/instagram.png') }}" alt="Instagram" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">Instagram</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="https://www.facebook.com/pmesp/" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/facebook.png') }}" alt="Facebook" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px; text-align: center;">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/pmesp" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/twitter.png') }}" alt="Twitter" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@PMESP" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/youtube.png') }}" alt="YouTube" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">YouTube</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@PMESP" target="_blank" class="logo-white hstack gap-2">
                                    <img src="{{ asset('images/icons/tik-tok.png') }}" alt="TikTok" class="img-fluid" style="max-height:24px; filter: brightness(0) invert(1);">
                                    <span class="text-white text-opacity-100" style="font-size:14px;">TikTok</span>
                                </a>
                            </li> -->
                        </ul>
                </div>

                
                {{-- Linha separadora --}}
                <hr style="border-color: rgba(255,255,255,0.15); margin-top: 3rem; margin-bottom: 1.5rem;">
                {{-- Copyright e endereço abaixo da linha --}}
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <p class="mb-0 text-white text-opacity-50" style="font-size:13px; text-transform:uppercase; letter-spacing:0.5px;">
                            13º BAEP — "A vitória se conquista."
                        </p>
                        <p class="mb-0 text-white text-opacity-50" style="font-size:13px; text-transform:uppercase; letter-spacing:0.5px;">
                            Copyright © 2026 13º BAEP — Todos os direitos reservados.
                        </p>
                        <p class="mb-0 text-white text-opacity-50" style="font-size:13px; text-transform:uppercase; letter-spacing:0.5px;">
                            Avenida Rodrigues Alves, 38-118 - Vila Cardia, Bauru/São Paulo.
                        </p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <p class="mb-0 text-white text-opacity-30" style="font-size:13px; text-transform:uppercase; letter-spacing:0.5px;">
                            Desenvolvido pela Seção de Telemática.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="get-template hstack gap-2">
        <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0" id="scrollToTopBtn">
            <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
        </button>
    </div>

    <script src="{{ asset('studiova/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('studiova/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('studiova/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="{{ asset('studiova/libs/aos-master/dist/aos.js') }}"></script>
    <script src="{{ asset('studiova/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    @stack('scripts')

</body>
</html>