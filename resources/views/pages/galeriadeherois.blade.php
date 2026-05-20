@extends('layouts.layout')

@section('title', '13º BAEP — Galeria de Heróis')

@section('content')

@php
    use Illuminate\Support\Facades\Storage;
    $herois = \App\Models\Heroi::orderBy('created_at', 'asc')->get();
    $silhueta = asset('images/policialmes/silhueta3x4.jpg');
@endphp

{{-- GALERIA DE HERÓIS --}}
<section class="py-5 py-lg-11 py-xl-12 bg-light-gray" id="herois">
    <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">

            {{-- Cabeçalho --}}
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4">
                    <div class="d-flex align-items-center gap-7 py-2">
                        <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                        <hr class="border-line">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="d-flex flex-column gap-6">
                        <h2 class="mb-0">Galeria de Heróis</h2>
                        <p class="fs-5 mb-0">"Combati o bom combate, acabei a carreira e guardei a fé"</p>
                        <p class="mb-0 text-center text-muted" style="font-size:13px;">2 Timóteo 4:7-8</p>
                    </div>
                </div>
            </div>

            {{-- Carrossel --}}
            <div class="owl-carousel owl-theme coverflow-carousel position-relative">
                @forelse($herois as $index => $heroi)
                    <div class="heroi-card position-relative overflow-hidden" style="border-radius:8px;">
                        <img src="{{ $heroi->foto ? Storage::url($heroi->foto) : $silhueta }}"
                            alt="{{ $heroi->nome }}"
                            class="img-fluid w-100"
                            style="height:450px; object-fit:contain; background-color:#F4F8FA;">
                        <div class="heroi-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 60%, transparent 100%); opacity:0; transition: opacity 0.4s ease;">
                            <h5 class="text-white mb-1">{{ $heroi->nome }}</h5>
                            <p class="text-white text-opacity-70 mb-0" style="font-size:13px;">{{ $heroi->graduacao }}</p>
                        </div>
                    </div>
                @empty
                    <div class="heroi-card position-relative overflow-hidden" style="border-radius:8px;">
                        <img src="{{ $silhueta }}" alt="Herói" class="img-fluid w-100" style="height:450px; object-fit:contain; background-color:#F4F8FA;">
                        <div class="heroi-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 60%, transparent 100%); opacity:0; transition: opacity 0.4s ease;">
                            <p class="text-primary fw-bold mb-1" style="font-size:12px; text-transform:uppercase; letter-spacing:2px;">Em breve</p>
                            <h5 class="text-white mb-1">A definir</h5>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</section>

@push('scripts')
<script>
    $('.coverflow-carousel').owlCarousel({
        loop: false,
        margin: -30,
        nav: true,
        dots: false,
        center: true,
        startPosition: 0,
        navText: [
            '<iconify-icon icon="lucide:chevron-left"></iconify-icon>',
            '<iconify-icon icon="lucide:chevron-right"></iconify-icon>'
        ],
        responsive: {
            0: { items: 1 },
            768: { items: 3 },
            1200: { items: 3 }
        }
    });
</script>
@endpush

@endsection