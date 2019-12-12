@extends('layouts.appPrimerSemestre', ['class' => 'bg-default'])

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8" style="background-color: #e3e6e8;">
    <div class="justify-content-center">
      <div class="container-fluid mt--3 w-75">
        <center style="margin-top: 47px;" >
            <h1 style="color: #141415;">Bienvenido a la Universidad de los Andes</h1>
            <h2 style="color: #141415;">Seleccione el programa que desea consultar</h2>
        </center>
          <div class="card-body">
              <div class="row">
                @foreach($programas as $programa)
                <div class="col-lg-4" style="padding-bottom: 15px">
                  <div class="card text-center">
                    {{--
                    <div class="card-header" style="height: 64px;" >
                    @if($programa->codigo == '0')
                    @elseif($programa->codigo == ' ')
                    @else
                      {{$programa->codigo}}
                    @endif
                    </div>
                    --}}
                    <div class="card-body" style="height: 105px;">
                      <h2 class="card-title">{{$programa->nombre}}</h2>
                    </div>
                    <div class="card-footer text-muted">
                     <a href="{{ url('programa/'.$programa->nombre)}}" class="btn btn-primary btn-sm" style="border-color: #5e72e400; background-color: #0f0f10f2;" >Ingresar</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
          </div>
       </div>
    </div>
 </div>
@endsection
