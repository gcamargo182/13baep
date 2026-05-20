@extends('layouts.layout')

@section('content')
<section class="py-5 py-lg-11">
    <div class="container">
        <h2 class="mb-6">K9 Marília
        </h2>
          <div class="ratio" style="height: 80vh;">
            <iframe src="{{ asset('docs/k9Marilia.pdf') }}" width="100%" height="100%" style="border:none;">
            </iframe>
          </div>
    </div>
</section>
@endsection