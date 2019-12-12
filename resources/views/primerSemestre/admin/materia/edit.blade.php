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
                <h3 class="mb-0">Editar Materia</h3>
            </div>


            <div id="like_button_container"></div>

            <form method="post" action="{{ url('admin/materia/'.$data->id) }}" autocomplete="off">
            @csrf
            @method('put')
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre" value="{{$data->nombre}}">
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
                            <input type="text" class="form-control" id="codigo"  name="codigo" placeholder="codigo" value="{{$data->codigo}}">
                            @if ($errors->has('codigo'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('codigo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="numero">Numero</label>
                            <input type="number" class="form-control" id="numero"  name="numero" placeholder="numero" value="{{$data->numero}}">
                            @if ($errors->has('numero'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('numero') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="creditos">Créditos</label>
                            <input type="text" class="form-control" id="creditos"  name="creditos" placeholder="creditos" value="{{$data->creditos}}">
                            @if ($errors->has('creditos'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('creditos') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="programa">Programa</label>
                            <input type="text" class="form-control" id="programa"  name="programa" placeholder="programa" value="{{$data->programa}}">
                            @if ($errors->has('programa'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('programa') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="periodo">Periodo</label>
                            <input type="number" class="form-control" id="periodo"  name="periodo" placeholder="periodo" value="{{$data->periodo}}">
                            @if ($errors->has('periodo'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('periodo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-4">Guardar</button>
                <a href="{{ url('admin/materia')}}" class="btn btn-secondary mt-4">Atras</a>
            </div>
        </div>
       </form>

            </div>
        </div>
        @include('layouts.footers.auth')
    </div>




@endsection

@push('js')

@endpush

@push('css')

@endpush
