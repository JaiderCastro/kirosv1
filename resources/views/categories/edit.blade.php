<!-- Modal -->
<div class="modal fade" id="editar<?=$num?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"> Categoria</label>
                  <input type="text" class="form-control" id="recipient-name" name="name" value="{{ $category->name }}">
                </div>


                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Descripcion</label>
                    <input type="text" class="form-control" id="recipient-name" name="description" value="{{ $category->description }}">
                  </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Editar</button>
              </form>
        </div>


        </div>
      </div>
    </div>
  </div>
