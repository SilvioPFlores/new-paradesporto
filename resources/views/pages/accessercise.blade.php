@extends('layouts.app')

@section('title', 'Accessercise - ' . __('messages.titulo'))
@section('menu_title', 'ACCESSERCISE')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/css-home.css') }}">
@endpush

@section('content')
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Coluna com a imagem do celular -->
        <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
            <img src="{{ asset('img/home/accessercise-mao.png') }}" class="img-fluid" alt="Accessercise App">
        </div>

        <!-- Coluna com QR, link e textos -->
        <div class="col-12 col-md-8 text-center">
            <img src="{{ asset('img/home/accessQr.png') }}" style="width:150px;" alt="QR Code">
            
            <div class="divAccess my-3">
                <a href="https://accessercise.com/" target="_blank" class="h4 d-block text-decoration-none">
                    https://accessercise.com/
                </a>
            </div>

            <h3>{{ __('messages.bemVindo') }}</h3>
            <p class="h5 mt-3">{{ __('messages.parag_1') }}</p>
            <p class="h5">{{ __('messages.parag_2') }}</p>
            <p class="h5">{{ __('messages.parag_3') }}</p>

            <!-- Botões App Store e Google Play -->
            <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                <a href="https://play.google.com/store/apps/details?id=com.accessercise.android.prod&pcampaignid=web_share" target="_blank">
                    <img src="{{ asset('img/home/dispGoogle.png') }}" alt="Google Play" class="img-fluid" style="max-height:60px;">
                </a>
                <a href="https://apps.apple.com/br/app/accessercise/id1542340631" target="_blank">
                    <img src="{{ asset('img/home/dispApple.png') }}" alt="App Store" class="img-fluid" style="max-height:60px;">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection