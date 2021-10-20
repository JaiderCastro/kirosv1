<div class="modal fade" id="eliminar<?=$num?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Equipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('equipments.destroy', $equipment->id) }}" method="post">
                    @csrf
                    @method('delete')
                <h6>¿Seguro que desea elimiar el equipo <strong> " {{ $equipment->equipment }} " ?<br><br></strong >Una vez eliminado NO se recuperara</h6>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div>
