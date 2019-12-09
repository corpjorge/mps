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
                                <h3 class="mb-0">Grupo de materias</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <h3><a href="#agregar-grupo-materia" style="color: #32325d;">Agregar grupo de materias</a></h3>
                          <p>Para agregar un grupo de materia, dar clic en editar programa, luego en el botón agregar grupo y colocar el nombre que va a tener el respectivo grupo.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/grupomateriasagregar.gif')}}" style="width: 70%;">
                          </center>
                          <h3><a href="#editar-gurpo-materia" style="color: #32325d;">Editar grupo de materia</a></h3>
                          <p>Para realizar la edición del nombre de un grupo de materias, ingrese al programa que contiene el grupo, luego de en el icono de edición <i class="fas fa-edit"></i> del grupo de materias de clic y cambie el nombre como desee.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/grupomateriaseditar.gif')}}" style="width: 70%;">
                          </center>
                          <h3><a href="#editar-materia" style="color: #32325d;">Borrar grupo de materias</a></h3>
                          <p>Para Borran un grupo de materia de clic en el icono <i class="fas fa-trash"></i> del grupo a borrar</p>

                          <h3><a href="#agregar-materias-a-grupo" style="color: #32325d;">Agregar materias a un grupo</a></h3>
                          <p>Para añadir una materia a un respectivo grupo de clic en el icono de adición <i class="fas fa-plus"></i>, luego busque la respectiva materia a añadir con el código y guarde, la materia estará en el grupo que selecciono.</p>
                          <center>
                            <img src="{{ asset('argon/img/document/grupomateriaagregarmateria.gif')}}" style="width: 70%;">
                          </center>
                          <h3><a href="#editar-materia" style="color: #32325d;">Borrar grupo de materias</a></h3>
                          <p>Para editar la materia añadida o borrar de clic en los respectivos iconos: (Para borrar <i class="fas fa-trash"></i>) y (Para editar <i class="fas fa-edit"></i>)</p>
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
