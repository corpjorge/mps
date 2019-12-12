<div class="modal fade" id="modal_materias" tabindex="-1" role="dialog" aria-labelledby="modal_materias" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Grupo de materias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="createMateria" method="post" action="{{ url('admin/grupo/') }}" autocomplete="off">
            @csrf
            <input type="hidden" name="id_programa" value="{{$programa->id}}" />
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="grupo_materia">Nombre del grupo de materia</label>
                            <input type="text" name="grupo_materia" class="form-control" placeholder="Ingrese el nombre del grupo de materias" />
                        </div>
                    </div>
                </div>
                <div class="row">
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
