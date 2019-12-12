<div class="modal fade" id="modal-delete-materia_{{$grupoMateria->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-materia_{{$grupoMateria->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar materias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ url('admin/grupo-materia/'.$grupoMateria->id) }}" autocomplete="off" style="display: unset;">
      <div class="modal-body">
          @csrf
          @method('DELETE')
        Desea eliminar materia seleccionada

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </form>
  </div>
</div>
