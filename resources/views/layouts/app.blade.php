<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/head/paradesporto-icon.png') }}" sizes="16x16" type="image/png">

    <!-- CDN Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery & Plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>

    <!-- SweetAlert -->
    <script src="{{ asset('admin/js/sweetalert.min.js') }}"></script>

    <!-- Rybena (Acessibilidade) -->
    <script type="text/javascript" src="{{ asset('js/rybena.js?positionPlayer=left&positionBar=right') }}"></script>

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">

    <!-- CSS/JS Telefone -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <!-- CSS e JS Locais -->
    <link href="{{ asset('css/css-head-foot.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Permite injetar CSS específico de páginas filhas -->
    @stack('styles')

    <title>@yield('title', 'Paradesporto + Acessível')</title>
</head>
<body>

    <!-- Cabeçalho -->
    <div class="container cabec">
        <div class="row">
            <!-- Idiomas -->
            <div class="col-12 btnDireito">
                <div class="dropdown">
                    <button class="btn btnVerde btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/head/lang-pt.png') }}" class="bandeira"> Português (Brasil)
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:lingua('en');"><img src="{{ asset('img/head/lang-en.png') }}" class="bandeira"> English</a></li>
                        <li><a class="dropdown-item" href="javascript:lingua('es');"><img src="{{ asset('img/head/lang-es.png') }}" class="bandeira"> Español</a></li>
                        <li><a class="dropdown-item" href="javascript:lingua('pt-br');"><img src="{{ asset('img/head/lang-pt.png') }}" class="bandeira"> Português (Brasil)</a></li>
                    </ul>
                </div>
            </div>

            <!-- Logo Principal -->
            <div class="col-sm-8 logo">
                <p class="text-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/head/logo.png') }}" alt="Paradesporto Brasil + Acessível">
                    </a>
                </p>
            </div>

            <!-- Coluna Direita: Voltar / UNIFESP / Contato -->
            <div class="col-sm-4">
                <div class="d-flex logo-head logo">
                    {{-- Se NÃO estiver na Home, exibe o botão Voltar --}}
                    @if(!request()->routeIs('home'))
                        <div class="text-center">
                            <a href="javascript:history.go(-1)" class="textoLinkCabec">
                                <img src="{{ asset('img/head/voltar.png') }}" style="width:130px; height:auto;"><br>
                                <strong class="text-center">Voltar</strong>
                            </a>
                        </div>
                    @endif

                    <div>
                        <a href="https://www.unifesp.br" target="_blank">
                            <img src="{{ asset('img/head/logo-unifesp.png') }}" alt="UNIFESP" style="width:120px; height:auto;">
                        </a>
                        
                        {{-- Se ESTIVER na Home, exibe o botão Contato --}}
                        @if(request()->routeIs('home'))
                            <br>
                            <a href="{{ route('contato') }}" class="btn btnVerde contato" role="button">
                                Contato
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Faixa do Menu/Título da Página (SÓ exibe se a view definir @section('menu_title')) -->
    @hasSection('menu_title')
        <nav class="navbar navbar-expand corVerde">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center">
                    <span class="navbar-brand mb-0 h1 nomeMenu">@yield('menu_title')</span>
                </div>
            </div>
        </nav>
    @endif

    <!-- Conteúdo Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Rodapé -->
    <br>
    <footer class="corVerde">
        <div class="logo-foot justify-content-between espTop8">
            <div class="text-center">
                <strong>Realização</strong>
                <br>
                <div class="espTop2">
                    <img src="{{ asset('img/foot/logo-educa.png') }}" style="width:90px; height:auto; margin-left: 10px;" alt="Educação Física UNIFESP">
                    <img src="{{ asset('img/foot/logo_unifesp_branco.png') }}" style="width:130px; height:auto;" alt="UNIFESP">
                </div>
            </div>
            <div class="d-flex logo-head">
                <div class="text-center" style="max-width:330px;">
                    <strong>Apoio</strong>
                    <br>
                    <img src="{{ asset('img/foot/ministerio-esporte.png') }}" style="width:100%; height:auto;" alt="Ministério do Esporte">
                </div>
            </div>
        </div>
    </footer>

    <!-- Permite injetar JS específico de páginas filhas -->
    @stack('scripts')
</body>
</html>