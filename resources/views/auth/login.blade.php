@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>{{ __('Iniciar sesión') }}</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="{{ url('auth')}}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/brand/favicon.ico"></span>
                                <span class="btn-inner--text">Uniandes</span>
                            </a>
                            <a href="{{ route('login-local') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <span class="btn-inner--text">Usuario</span>
                            </a>
                        </div>
                        @if(session()->has('message'))
                          <div class="col-sm mt-2 mb-3">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{session()->get('message')}}
                           </div>
                          </div>
                        @endif

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a href="https://cuenta.uniandes.edu.co/Cuenta2/recuperacionclave.jsp" target="_blank" class="text-light">
                                <small>{{ __('¿Se te olvidó tu contraseña?') }}</small>
                            </a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        <a href="https://cuenta.uniandes.edu.co/Cuenta2/activacionclave.jsp"  target="_blank" class="text-light">
                            <small>{{ __('Activar cuenta') }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
