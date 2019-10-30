<div class="modal fade" id="modal-materias-add" tabindex="-1" role="dialog" aria-labelledby="modal-materias-add" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Matarias y Descripcion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="añadirMateria" method="post" action="{{ url('admin/grupo-materia') }}" autocomplete="off">
            @csrf
            <input type="hidden" name="id_grupo" id="id_grupo" value="" />
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <div id="addMateria"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción de la condición de la materia" name="descripcion"></textarea>
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
