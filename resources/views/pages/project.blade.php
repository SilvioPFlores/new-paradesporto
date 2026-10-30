@extends('layouts.app')

@section('title', __('messages.projeto') . ' - Paradesporto + Acessível')
@section('menu_title', __('messages.projetoUp'))

@section('content')
<div class="container py-4">
    <div class="text-center">
        <br>
        <h3>{{ __('messages.objetivo') }}</h3>
        
        @foreach ($objectives as $objetivo)
            <p class="h5">{{ $objetivo->$lang }}</p>
            <br>
        @endforeach

        <p class="h5"><a href="https://fesafa.net/" target="_blank">Fesafa</a></p>
        <p class="h5"><a href="https://www.gov.br/cidadania/pt-br/noticias-e-conteudos/esporte" target="_blank">Ministério do Esporte</a></p>
        <br>

        {{-- Coordenação --}}
        @if($coordinationRole && $coordinator)
            <h3>{{ $coordinationRole->$lang }}</h3>
            <h5>
                {{ optional($coordinator->pronoun)->$lang }} {{ $coordinator->name }}
            </h5>
            <br>
        @endif

        <h3>{{ __('messages.equipe') }}</h3>
    </div>

    {{-- Lista de Cargos e Equipes --}}
    @foreach ($roles as $cargo)
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-4 col-md-3 pt-0">
                <strong>{{ $cargo->$lang }}</strong>
            </legend>
            <div class="col-sm-8 col-md-9">
                @foreach ($cargo->teamMembers as $index => $membro)
                    <div class="form-check">
                        <label class="form-check-label">
                            @if($index === 0 && !empty($cargo->leader_title))
                                <strong>{{ $cargo->leader_title }}</strong> - 
                            @endif
                            
                            {{ optional($membro->pronoun)->$lang }} {{ $membro->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </fieldset>
    @endforeach
</div>
@endsection