@extends('layouts.layout')

@section('content')

<section class="py-5 py-lg-11 py-xl-12">
    <div class="container">
        <div class="row align-items-center gap-7 gap-xl-0">

            {{-- Texto --}}
            <div class="col-xl-7" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">

                <p class="text-primary fw-bold mb-1" style="font-size:13px; text-transform:uppercase; letter-spacing:2px;">
                    Maio / 2026
                </p>

                <h2 class="mb-2">Ocorrência de Destaque</h2>
                <hr style="border-color: #E9BF17; width:60px; border-width:3px; opacity:1; margin-bottom:2rem;">

                <p class="fs-6 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <p class="fs-6 text-muted">
                    Sua conduta exemplar é fundamentada na execução cuidadosa das responsabilidades que lhe são confiadas, combinada com uma abordagem humana e cordial.
                </p>

                <p class="fs-6 text-muted">
                    Como membro exemplar da instituição policial militar, desempenha um papel crucial nas operações do 13º BAEP, sendo referência para seus pares.
                </p>

                <div class="mt-5">
                    <p class="fw-bold mb-0">NOME DO COMANDANTE</p>
                    <p class="fw-bold text-muted">Posto e Função</p>
                </div>

                <a href="{{ route('home') }}" class="btn btn-dark rounded-pill px-5 mt-3">
                    <iconify-icon icon="lucide:chevron-left" class="me-1"></iconify-icon> Voltar
                </a>

            </div>

            {{-- Foto --}}
<div class="col-xl-5 text-center" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
    <div class="position-relative d-inline-block" style="padding: 0 20px 20px 0;">
        {{-- Borda decorativa atrás --}}
        <div class="position-absolute bottom-0 end-0" 
            style="width:92%; height:92%; border-radius:20px; background-color:rgba(233, 191, 23, 0.8); z-index:0;">
        </div>
        {{-- Foto --}}
        <img src="{{ asset('images/policialmes/silhueta3x4.jpg') }}"
            alt="Policial do Mês"
            class="img-fluid position-relative"
            style="border-radius:16px; z-index:1; max-height:520px; width:100%; object-fit:cover; object-position: top center; box-shadow: 0 8px 32px rgba(0,0,0,0.18);">
    </div>
</div>

        </div>
    </div>
</section>

@endsection