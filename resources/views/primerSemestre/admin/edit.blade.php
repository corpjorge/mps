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
                <h3 class="mb-0">Editar Programa</h3>
                <a href="{{ url('programa/'.$programa->nombre)}}" style="float: right;" target="_blank">
                    <button type="button" class="btn btn-sm btn-basic">
                      <i class="fas fa-external-link-alt"></i> Visualizar
                    </button>
                </a>
            </div>


            <div id="like_button_container"></div>

            <form method="post" action="{{ route('programa.update', $programa) }}" autocomplete="off">
            @csrf
            @method('put')
            <!-- Card body -->

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-control-label" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" value="{{$programa->nombre}}" name="nombre" placeholder="nombre">
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
                            <input type="text" class="form-control" id="codigo" value="{{$programa->codigo}}" name="codigo" placeholder="codigo">
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
                            <input type="text" class="form-control" id="creditos" value="{{$programa->creditos}}" name="creditos" placeholder="creditos">
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
                            <input type="text" class="form-control" id="web" value="{{$programa->web}}" name="web" placeholder="web">
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
                            <input type="text" class="form-control" id="coordinador" value="{{$programa->coordinador}}" name="coordinador" placeholder="coordinador">
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
                            <input type="text" class="form-control" id="correo" value="{{$programa->correo}}" name="correo" placeholder="correo">
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
                            <input type="text" class="form-control" id="telefono" value="{{$programa->telefono}}" name="telefono" placeholder="telefono">
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
                            <input type="text" class="form-control" id="nota" value="{{$programa->nota}}" name="nota" placeholder="nota">
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
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="descripcion" name="descripcion">{{$programa->descripcion}}</textarea>
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
                            <textarea class="form-control" id="recordatorio" rows="3" placeholder="Recordatorio" name="recordatorio">{{$programa->recordatorio}}</textarea>
                            @if ($errors->has('recordatorio'))
                                <span class="invalid-feedback" role="alert" style="display: unset;">
                                    <strong>{{ $errors->first('recordatorio') }}</strong>
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
              <div class="card shadow">
                  <div class="card-header border-0">
                      <div class="row align-items-center">
                          <div class="col">
                              <h3 class="mb-0">Grupos de materias</h3>
                          </div>
                          <div class="col text-right">
                              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_materias">
                                Añadir Grupo
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table align-items-center table-flush">
                          <tbody>
                              @foreach ($grupos as  $grupo)
                              <thead class="thead-light">
                                  <tr>
                                      <th scope="col">
                                        {{$grupo->nombre}}
                                      </th>
                                      <th scope="col">Descripción
                                      </th>
                                      <th>Mover</th>
                                      <th class="text-right" style="width: 101px;">
                                        <a style="color: #525f7f;" >
                                          <i class="fas fa-plus" id="{{$grupo->id}}" data-toggle="modal" data-target="#modal-materias-add" style="cursor: pointer;"></i>
                                        </a>
                                        <a style="color: #525f7f;">
                                          <i class="fas fa-edit editGrupo" data-id-grupo="{{$grupo->id}}" data-texto-grupo="{{$grupo->nombre}}" data-toggle="modal" data-target="#modal-edit-grupo" style="cursor: pointer;"></i>
                                        </a>
                                        <a style="color: #525f7f;">
                                          <i class="fas fa-trash" data-toggle="modal" data-target="#modal-delete-grupo_{{$grupo->id}}" style="cursor: pointer;"></i>
                                        </a>
                                        @include('primerSemestre.admin.modal.modalDeleteGrupo')
                                      </th>
                                  </tr>
                              </thead>
                                @foreach ($grupoMaterias as $grupoMateria)
                                  @if ($grupoMateria->prim_sem_grupo_id == $grupo->id)
                                    <tr>
                                      <td>{{$grupoMateria->materias->nombre}}</td>
                                      <td>{{$grupoMateria->descripcion}}</td>
                                      <td>
                                        <a href="{{ url('admin/orden/up/'.$grupoMateria->id) }}"><i class="fas fa-arrow-up"></i></a>
                                        <a href="{{ url('admin/orden/down/'.$grupoMateria->id) }}"><i class="fas fa-arrow-down"></i></a>
                                      </td>
                                      <td>
                                        <i class="fas fa-edit editar-materia" id="{{$grupoMateria->id}}" data-materia="{{$grupoMateria->materias->nombre}}" data-materia-id="{{$grupoMateria->materias->id}}" data-descripcion="{{$grupoMateria->descripcion}}" data-toggle="modal" data-target="#modal-edit-grupo-materia" style="cursor: pointer;">
                                        </i>
                                        <i class="fas fa-trash" data-toggle="modal" data-target="#modal-delete-materia_{{$grupoMateria->id}}" style="cursor: pointer;">
                                        </i>
                                        @include('primerSemestre.admin.modal.modalDeleteMateria')
                                      </td>
                                    </tr>
                                  @endif
                                @endforeach
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>

<!-- Modal añadir Nombre del grupo de materias -->
@include('primerSemestre.admin.modal.modalGrupoMateria')
<!-- Modal editar Nombre del grupo de materias -->
@include('primerSemestre.admin.modal.modalEditGrupo')
<!-- Modal añadir materias a grupo de materias -->
@include('primerSemestre.admin.modal.modalMateria')
<!-- Modal añadir materias a grupo de materias -->
@include('primerSemestre.admin.modal.modalEditGrupoMateria')


@endsection

@push('js')
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/primSemestre.js') }}"></script>
    <script type="text/javascript">

        ////añadir materias a grupo creado//
        $( ".fa-plus" ).click(function() {
          id = $(this).attr("id");
          $('#modal-materias-add').on('show.bs.modal', function (e) {
           $('#id_grupo').attr('value', id);
         });
        });

      //Modal editar descripcion
       $( ".editDesc" ).click(function() {
         let id = $(this).attr("data-id-descripcion");
         let text = $(this).attr("data-id-text");
         if (text == '1') {
            text = '';
         }

         urlId ="/admin/descripcion/"+id;
         url = '{{ url( '' ) }}';
         url = url+urlId;

         $('#EditardescripcionInput').val(text);
         $('#editarDesc').attr('action', url);

       });

       //Modal Editar Nombre Grupo de materias
       $( ".editar-materia" ).click(function() {

         let id = $(this).attr("id");
         let idMateria = $(this).attr("data-materia-id");
         let mataria = $(this).attr("data-materia");
         let descripcionMateria = $(this).attr("data-descripcion");

         urlId ="/admin/grupo-materia/"+id;
         url = '{{ url( '' ) }}';
         url = url+urlId;

         $('#materiaAgregarEdit').val(mataria);
         $('#id_materiaEditar').val(idMateria);
         $('#descripcionEdit').val(descripcionMateria);
         $('#editarGrupoMateri').attr('action', url);

       });

       //Modal Editar Nombre Grupo de materias
       $( ".editGrupo" ).click(function() {
         let id = $(this).attr("data-id-grupo");
         let text = $(this).attr("data-texto-grupo");

         urlId ="/admin/grupo/"+id;
         url = '{{ url( '' ) }}';
         url = url+urlId;

         $('#editar_grupo_materia').val(text);
         $('#editarGrupo').attr('action', url);
       });

       //Modal Añadir materias a descripcion
        $( ".addMateriaDesc" ).click(function() {
          let id = $(this).attr("data-id-materiadesc");

          urlId ="/admin/materias/edit/"+id;
          url = '{{ url( '' ) }}';
          url = url+urlId;

          $('#añadirMateriaDesc').attr('action', url);
        });
    </script>
@endpush

@push('css')
<link type="text/css" href="{{ asset('css/primSemestre.css') }}" rel="stylesheet">
@endpush
