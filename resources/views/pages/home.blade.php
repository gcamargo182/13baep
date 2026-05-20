@extends('layouts.app')

@section('title', 'Home — 13º BAEP')

@section('content')

    {{-- HERO --}}
    <section id="hero" class="s-hero target-section">
        <div class="row s-hero__content">
            <div class="column">
                {{-- conteúdo do hero aqui --}}
            </div>
        </div>
        <div class="s-hero__scroll">
            <a href="#homem" class="s-hero__scroll-link smoothscroll">
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>

    {{-- HOMEM --}}
    <section id="homem" class="s-portfolio">
        <div class="row s-porfolio__top">
            <div class="column large-6 w-900-stack">
                <div class="section-title" data-num="01" data-aos="fade-up">
                    <h3>Homem</h3>
                </div>
            </div>
            <div class="column large-6 w-900-stack">
                <h1 class="display-1" data-aos="fade-up">
                    Executar ações táticas e operações especiais de polícia ostensiva e preservação da ordem pública, com alta complexidade e risco, na área do CPI-4.
                </h1>
            </div>
        </div>

        <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{ asset('images/portfolio/gallery/g-red-wheel.jpg') }}" title="The Red Wheel" data-size="1050x700">
                            <img src="{{ asset('images/portfolio/red-wheel.png') }}"
                                 srcset="{{ asset('images/portfolio/red-wheel.png') }} 1x, {{ asset('images/portfolio/red-wheel@2x.png') }} 2x"
                                 alt="Red Wheel">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Branding</div>
                        <h4 class="folio-item__title">The Red Wheel</h4>
                    </div>
                    <div class="folio-item__caption">
                        <p>Descrição do item aqui.</p>
                    </div>
                </div>
            </div>

            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{ asset('images/portfolio/gallery/g-music-life.jpg') }}" title="Music Life" data-size="1050x700">
                            <img src="{{ asset('images/portfolio/music-life.png') }}"
                                 srcset="{{ asset('images/portfolio/music-life.png') }} 1x, {{ asset('images/portfolio/music-life@2x.png') }} 2x"
                                 alt="Music Life">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">Music Life</h4>
                    </div>
                    <div class="folio-item__caption">
                        <p>Descrição do item aqui.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EQUIPAMENTO --}}
    <section id="equipamento">
        <div>
            <div class="section-title" data-num="02" data-aos="fade-up">
                <h3>Equipamento</h3>
            </div>
            <div data-aos="fade-up">
                <h1>Descrição sobre equipamentos do batalhão.</h1>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <h3>Define</h3>
                <p>Descrição aqui.</p>
            </div>
            <div class="column">
                <h3>Design</h3>
                <p>Descrição aqui.</p>
            </div>
            <div class="column">
                <h3>Build</h3>
                <p>Descrição aqui.</p>
            </div>
            <div class="column">
                <h3>Launch</h3>
                <p>Descrição aqui.</p>
            </div>
        </div>
    </section>

    {{-- TREINAMENTO --}}
    <section id="treinamento">
        <div>
            <div class="section-title" data-num="03" data-aos="fade-up">
                <h3>Treinamento</h3>
            </div>
            <div data-aos="fade-up">
                <h1>Descrição sobre treinamentos do batalhão.</h1>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <span></span>
                <h3>Product Design</h3>
                <p>Descrição aqui.</p>
            </div>
            <div class="column">
                <span></span>
                <h3>Branding</h3>
                <p>Descrição aqui.</p>
            </div>
            <div class="column">
                <span></span>
                <h3>Frontend Development</h3>
                <p>Descrição aqui.</p>
            </div>
            <div class="column">
                <span></span>
                <h3>UX Research</h3>
                <p>Descrição aqui.</p>
            </div>
        </div>
    </section>

@endsection