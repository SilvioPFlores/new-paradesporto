@extends('layouts.app')

@section('title', __('messages.titulo'))

@section('menu_title', '')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/css-home.css') }}">
@endpush

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-5 g-4 top40">
        
        <!-- Card Podcast -->
        <div class="col">
            <a href="https://anchor.fm/paradesporto" target="_blank">
                <div class="card text-center cardHome responsive-bord h-100">
                    <div class="card-body responsive-bory-card">
                        <img class="card-img-top" src="{{ asset('img/home/podcast.png') }}" alt="Podcast">
                        <strong class="responsive-font-example">PODCAST</strong>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Repositório -->
        <div class="col">
            <a href="{{ route('repositorio.index') }}">
                <div class="card text-center cardHome responsive-bord rounded-4 h-100">
                    <div class="card-body responsive-bory-card">
                        <img class="card-img-top" src="{{ asset('img/home/paradesporto.png') }}" alt="Repositório">
                        <strong class="responsive-font-example">{{ __('messages.reposit') }}</strong>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Youtube -->
        <div class="col">
            <a href="https://www.youtube.com/@paradesportoacessivel" target="_blank">
                <div class="card text-center cardHome responsive-bord rounded-4 h-100">
                    <div class="card-body responsive-bory-card">
                        <img class="card-img-top" src="{{ asset('img/home/logo-youtube.png') }}" alt="YouTube">
                        <strong class="responsive-font-example">{{ __('messages.canal') }}</strong>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Produção -->
        <div class="col">
            <a href="{{ route('producao.index') }}">
                <div class="card text-center cardHome responsive-bord rounded-4 h-100">
                    <div class="card-body responsive-bory-card">
                        <img class="card-img-top" src="{{ asset('img/home/producao.png') }}" alt="Produção">
                        <strong class="responsive-font-example">{{ __('messages.producao') }}</strong>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Projeto -->
        <div class="col">
            <a href="{{ route('projeto.index') }}">
                <div class="card text-center cardHome responsive-bord rounded-4 h-100">
                    <div class="card-body responsive-bory-card">
                        <img class="card-img-top" src="{{ asset('img/home/paradesporto.png') }}" alt="Projeto">
                        <strong class="responsive-font-example">{{ __('messages.projeto') }}</strong>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <!-- Redes e Parceiros -->
    <div class="container text-center my-4">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-12 col-sm-auto">
                <div class="divInsta">
                    <a href="https://www.instagram.com/paradesporto_br/" target="_blank" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                        <img src="{{ asset('img/home/logo-insta.png') }}" alt="Instagram">
                        <strong>@paradesporto_br</strong>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-auto">
                <div class="divAccess">
                    <a href="{{ route('accessercise') }}">
                        <img src="{{ asset('img/home/access.png') }}" alt="Accessercise">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection