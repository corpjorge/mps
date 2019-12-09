@extends('layouts.appPrimerSemestre', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8" style="background-color: #e3e6e8;">
      <div class="justify-content-center">
		<div class="container-fluid mt--3">

      <div class="card">
         <div class="card-header">
           <h1 class="mb-0">Programa de <b style="color:#48979a;">{{$programa->nombre}}</b>
             {{--
             @if($programa->codigo == '0')
             @elseif($programa->codigo == '')
             @else
             <span class="badge badge-default" style="background-color:#48979a; color:white;">{{$programa->codigo}}</span></h1>
             @endif
             --}}
         </div>
         <div class="card-body">
          <div class="row row-example">
          <div class="col-12 col-md-8">
            <div class="checklist-entry list-group-item flex-column align-items-start py-4 px-4 border-0">
                <div class="checklist-item checklist-item-success checklist-item-checked">
                  <h3 class="checklist-title mb-0">Recomendaciones primer semestre</h3>
                    <div class="checklist-info">
                        <small class="font-weight-bold">Créditos sugeridos:</small>
                        <small style="color:#d0160d;" > {{$programa->creditos}}</small><br><br>
                        <p class="">{!! $programa->descripcion !!}</p>
                          <div class="row row-example">
                            {!! $programa->opcionales !!}
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="checklist-entry list-group-item flex-column align-items-start py-4 px-4 border-0">
                <div class="checklist-item checklist-item-success checklist-item-checked">
                  <h3 class="checklist-title mb-0">Información del programa</h3>
                    <div class="checklist-info">
                        <small class="font-weight-bold">Créditos sugeridos:</small>
                        <small style="color:#d0160d;" >{{$programa->creditos}}</small><br><br>
                        <div style="font-size: 13px;">
                          <i class="fa fa-globe" aria-hidden="true"></i> <b>Sitio Web:</b><br>
                          <a href="https:\\{{$programa->web}}">{{$programa->web}}</a><br>
                          <i class="fa fa-user" aria-hidden="true"></i> <b>Coordinador Académico:</b><br>
                          {{$programa->coordinador}}<br>
                          <i class="fa fa-envelope" aria-hidden="true"></i> <b>Correo:</b><br>
                          {{$programa->correo}}<br>
                          <i class="fa fa-phone" aria-hidden="true"></i> <b>Teléfono:</b><br>
                          (571) 3394949/99 Ext. {{$programa->telefono}}<br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         </div>
       </div><br>

<div class="" style="margin: 50px 0 50px 0;">
<h1 class="mb-0">Listado de materias que debes ver en primer semestre</h1>
</div>

@if($programa->nota)
<div class="alert alert-secondary" role="alert">{!! $programa->nota !!} </div><br>
@endif

@if($programa->recordatorio)
<div class="card">
  <div class="card-body">
    {!! $programa->recordatorio !!}
  </div>
</div><br>
@endif




@foreach ($grupos as $key => $grupo)
<div class="card">
  <div class="card-header">
  <h3 class="mb-0">{{$grupo->nombre}}</h3>
  </div>
  <div class="container">
  <div class="row">
  @foreach ($materias as $materia)
    @if ($materia->prim_sem_grupo_id == $grupo->id)
     <div class="col-sm-4">
       <div class="card bg-gradient-primary" style="margin-top: 19px; background: #e2e2dd;">
         <div class="card-body degrade" style="border: 1px solid #e2e2dd; border-radius: .375rem; height: 170px;" >
            <div class="row justify-content-between align-items-center">
                <div class="col">
                  <h5 style="color: #fffcfc;" >{{$materia->materias->nombre}}</h5>
                </div>
                <div class="col-auto">
                  @if($materia->descripcion)
                  <a href="#" class="btn btn-twitter btn-icon-only rounded-circle"  style=" /*color: #fff200; border-color: #142233; background-color: #142233; color: #00a7a9; */ color: #005f61; border-color: #ffffff; background-color: #ffffff;" title="Ver nota" data-toggle="modal" data-target="#nota-modal-{{$materia->id}}">
                      <i class="ni ni-bell-55"></i>
                  </a>
                  <div class="modal fade modaldescrip" id="nota-modal-{{$materia->id}}" tabindex="-1" role="dialog" aria-labelledby="nota-modal-{{$materia->id}}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-" role="document">
                        <div class="modal-content" style="background: #fbfbfb!important;" >
                            <div class="modal-header">
                                <h6 class="modal-title" >Se requiere tu atención.</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <i class="ni ni-bell-55 ni-3x" style="color: #142233;"></i>
                                    <h4 class="heading mt-4">¡Usted debe saber esto!</h4>
                                    <p>{!! $materia->descripcion !!}</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal" style="color: #fff9f9; border-color: #19232f; background-color: #142233;" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endif
                </div>
            </div>
          <cite class="h6" title="{{$materia->materias->programa}}" style="/*color: #142233; */ color: #eaeaea;">
            @if($materia->materias->codigo == "CBU")<br>
            @else
            {{$materia->materias->codigo}}-{{$materia->materias->numero}}
            @endif
            @if($materia->materias->programa == '')
            @elseif($materia->materias->programa == 'NULL')
            @elseif($materia->materias->programa == NULL)
            @else
              {{$materia->materias->programa}}
            @endif
          </cite>
            <hr class="my-2" style="border-color: #ffffff; border-width: 2px;" >
            @if($materia->materias->codigo == "CBU")
              <div class="row">
                  <div class="col">
                      <span class="d-block h5" style="font-style: italic;">
                        <a href="http://cbu.uniandes.edu.co" target="_blank" rel="noopener" style="color: #e8e8e8;">Clic para ver los cursos CBU</a>
                      </span>
                  </div>
              </div>
            @else
            <div class="row">
                <div class="col">
                    <span class="d-block h5" style="font-style: italic; color: #ffffff" >Créditos: {{$materia->materias->creditos}}</span>
                </div>
                <div class="col">
                    <span class="h6 surtitle"></span>
                    <span class="d-block h5" style="font-style: italic; color: #ffffff" >Periodo: {{$materia->materias->periodo}} semanas</span>
                </div>
            </div>
            @endif
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div><br>
</div>
<br>
          @endforeach
			</div>
		</div>
	</div>
</div>
<div class="container mt--10 pb-5"></div>


<style type="text/css">

.checklist-item:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    content: '';
    border-radius: 8px;
    background-color: #5e72e4;
}

.degrade{
    /*background: rgb(248,203,100);*/
    /*background: rgb(0, 167, 169);*/
    background: #005F61;

}
.degrade h5 span{
 color: #142233;
}

.modaldescrip h6 div span p{
  color: #142233;
}

.color-url{
  color: #525f7f;
}

/*
Hover campana
background-color: #224e84;
#
*/
</style>
@endsection
