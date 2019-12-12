@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">

        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Programas</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <h3><a href="#agregar-programa" style="color: #32325d;">Agregar un programa</a></h3>
                          <p>Para agregar un programa, en el botón añadir programa, llenar el formulario y dar en el botón guardar.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/programaagregar.gif')}}" style="width: 70%;">
                          </center>
                          <h3><a href="#editar-programa" style="color: #32325d;">Editar Programa</a></h3>
                          <p>Para editar un programa se da clic en el icono <i class="fas fa-edit"></i> luego edita los campos a cambiar y guardas los respectivos cambios</p>
                          <center>
                            <img src="{{ asset('argon/img/document/programaeditar.gif')}}" style="width: 70%;">
                          </center>
                          <h3><a href="#activar-desactivar-programa" style="color: #32325d;">Activar o desactivar programa</a></h3>
                          <p>Para activar un programa dar clic en el icono <i class="fa fa-check-circle"></i> y confirmar, para desactivar un programa dar en el icono <i class="fa fa-power-off"></i> y confirmar.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/programaactivar.gif')}}" style="width: 70%;">
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer py-4">
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
