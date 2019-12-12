<div class="modal fade" id="modal-edit-grupo-materia" tabindex="-1" role="dialog" aria-labelledby="modal-edit-grupo-materia" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Editar Materia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editarGrupoMateri" method="post" action="" autocomplete="off">
            @csrf
            @method('PUT')
            <div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <div id="editarGrupoMateria"></div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <textarea class="form-control" id="descripcionEdit" rows="3" placeholder="Descripción de la condición de la materia" name="descripcion"></textarea>
                      </div>
                  </div>
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
