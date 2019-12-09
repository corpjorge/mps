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
                                <h3 class="mb-0">Materias</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <h3><a href="#agregar-materia" style="color: #32325d;">Agregar una materia</a></h3>
                          <p>Para agregar una materia, en el botón ver materias y luego en el botón añadir materias, llenar el formulario guardar.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/materiasagregar.gif')}}" style="width: 70%;">
                          </center>
                          <b>*Nota:</b> si desea agregar materia de tipo CBU seleccione SI en la opción de CBU y solamente llene el nombre solicitado.<br><br>
                          <h3><a href="#buscar-materia" style="color: #32325d;">Buscar y editar materia</a></h3>
                          <p>Para realizar la búsqueda de una materia para poder realizar su respectiva edición, de en el botón editar materia y realiza la respectiva búsqueda por el código completo de la materia.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/materiabuscar.gif')}}" style="width: 70%;">
                          </center>
                          <h3><a href="#editar-materia" style="color: #32325d;">Editar materia</a></h3>
                          <p>Para editar un programa se da clic en el icono <i class="fas fa-edit"></i> de la materia a editar, luego edita los campos a cambiar y guardas los respectivos cambios</p>
                          <center>
                            <img src="{{ asset('argon/img/document/materiaeditar.gif')}}" style="width: 70%;">
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
