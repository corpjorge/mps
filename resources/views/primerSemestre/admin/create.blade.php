@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
        </div>

        @if(session()->has('message'))
         <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-check"></i> Correcto!</h4>
             {{session()->get('message')}}
         </div>
        @endif


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card mb-4">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Crear Programa</h3>
            </div>

            <div id="like_button_container"></div>

            <form method="post" action="{{ url('admin/programa') }}" autocomplete="off">
            @csrf

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" value="{{ old('nombre') }}" name="nombre" placeholder="nombre" required>
                            @if ($errors->has('nombre'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="codigo">Código</label>
                            <input type="text" class="form-control" id="codigo" value="{{ old('codigo') }}" name="codigo" placeholder="codigo" required>
                            @if ($errors->has('codigo'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('codigo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="creditos">Créditos</label>
                            <input type="text" class="form-control" id="creditos" value="{{ old('creditos')}}" name="creditos" placeholder="creditos" required>
                            @if ($errors->has('creditos'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('creditos') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="web">Sitio web</label>
                            <input type="text" class="form-control" id="web" value="{{ old('web')}}" name="web" placeholder="web">
                            @if ($errors->has('web'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('web') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="coordinador">Coordinador</label>
                            <input type="text" class="form-control" id="coordinador" value="{{ old('coordinador') }}" name="coordinador" placeholder="coordinador">
                            @if ($errors->has('coordinador'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('coordinador') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="correo">Correo</label>
                            <input type="text" class="form-control" id="correo" value="{{ old('correo')}}" name="correo" placeholder="correo">
                            @if ($errors->has('correo'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('correo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="telefono">Extensión</label>
                            <input type="text" class="form-control" id="telefono" value="{{ old('telefono') }}" name="telefono" placeholder="telefono">
                            @if ($errors->has('telefono'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="nota">Nota</label>
                            <input type="text" class="form-control" id="nota" value="{{ old('nota') }}" name="nota" placeholder="nota">
                            @if ($errors->has('nota'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('nota') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="descripcion" name="descripcion">{{ old('descripcion')}}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="recordatorio">Recordatorio</label>
                            <textarea class="form-control" id="recordatorio" rows="3" placeholder="Recordatorio" name="recordatorio">{{ old('recordatorio') }}</textarea>
                            @if ($errors->has('recordatorio'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('recordatorio') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="recordatorio">Materias opcionales</label>
                            <textarea class="form-control" id="opcionales" rows="3" placeholder="Materias opcionales" name="opcionales">{{ old('opcionales') }}</textarea>
                            @if ($errors->has('opcionales'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('opcionales') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-4">Guardar</button>
                <a href="{{ url('admin/programa')}}" class="btn btn-secondary mt-4">Atras</a>
            </div>
        </div>
       </form>

            </div>
        </div>
        @include('layouts.footers.auth')
    </div>

@endsection
