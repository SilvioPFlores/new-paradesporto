@extends('layouts.app')

@section('title', __('messages.contato') . ' - Paradesporto + Acessível')
@section('menu_title', strtoupper(__('messages.contato')))

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/css-contato.css') }}">
@endpush

@section('content')
<div class="container py-4">
    <div class="col-xl-7 col-lg-9 col-md-11 col-sm-12 divCentro">
        <form class="row g-3" method="POST" action="{{ route('contato.send') }}" onsubmit="this.enviar.value='{{ __('messages.btnEnviando') }}'; this.enviar.disabled=true;">
            @csrf
            
            <div class="col-sm-6">
                <h4>{{ __('messages.dados') }}</h4>
            </div>
            <div class="col-sm-6 direita">
                <a href="mailto:paradesporto.acessivel@gmail.com">
                    <img src="{{ asset('img/envelope.png') }}" alt="E-mail"> paradesporto.acessivel@gmail.com
                </a>
            </div>

            <div class="col-12">
                <label for="txtNome" class="form-label">{{ __('messages.nome') }}<span class="req"> *</span></label>
                <input type="text" class="form-control" name="txtNome" id="txtNome" value="{{ old('txtNome') }}" required>
            </div>

            <div class="col-12">
                <label for="txtMail" class="form-label">{{ __('messages.mail') }}<span class="req"> *</span></label>
                <input type="email" class="form-control" name="txtMail" id="txtMail" value="{{ old('txtMail') }}" required>
            </div>

            <div class="col-sm-5">
                <label for="phone" class="form-label">{{ __('messages.fone') }}</label><br>
                <input type="tel" class="form-control" name="phone" id="phone">
            </div>

            <div class="col-sm-7">
                <label class="form-label">{{ __('messages.vcPcd') }}<span class="req"> *</span></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rdoPcd" id="pcdS" value="S" {{ old('rdoPcd') == 'S' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="pcdS">{{ __('messages.sim') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rdoPcd" id="pcdN" value="N" {{ old('rdoPcd') == 'N' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="pcdN">{{ __('messages.nao') }}</label>
                </div>
            </div>

            <div class="classePcd" style="display: {{ old('rdoPcd') == 'S' ? 'block' : 'none' }};">
                <div class="container px-0">
                    <div class="col-12">
                        <label for="cmbPcd" class="form-label">{{ __('messages.qDef') }}<span class="req"> *</span></label>
                        <select class="form-select" id="cmbPcd" name="cmbPcd">
                            <option value="" selected>{{ __('messages.selecione') }}</option>
                            @foreach($disabilities as $dado)
                                <option value="{{ $dado->id }}" {{ old('cmbPcd') == $dado->id ? 'selected' : '' }}>{{ $dado->$lang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 top10">
                        <label for="txtApoio" class="form-label">{{ __('messages.vcApoio') }}</label>
                        <input type="text" class="form-control" name="txtApoio" id="txtApoio" value="{{ old('txtApoio') }}">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="txtAssunto" class="form-label">{{ __('messages.assunto') }}</label>
                <input type="text" class="form-control" name="txtAssunto" id="txtAssunto" value="{{ old('txtAssunto') }}">
            </div>

            <div class="col-12">
                <label for="txtMensagem" class="form-label">{{ __('messages.msg') }}</label>
                <textarea class="form-control" name="txtMensagem" id="txtMensagem" rows="3">{{ old('txtMensagem') }}</textarea>
            </div>

            <div class="text-center">
                <input type="submit" id="btnEnviaForm" class="btn btn-success" name="enviar" value="{{ __('messages.btnEnviar') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/js-contato.js') }}"></script>
    
    @if(session('success'))
        <script>
            $(document).ready(function() {
                okNewPage("{{ session('success') }}", "{{ route('home') }}");
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            $(document).ready(function() {
                erroNewPage("{{ session('error') }}", "{{ route('contato') }}");
            });
        </script>
    @endif
@endpush