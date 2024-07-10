@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Sistema de información del Consejo Comunal El Encantado!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b>{{ __('Bienvenido al administrativo') }}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
