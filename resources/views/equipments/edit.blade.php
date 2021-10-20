<!-- Modal -->
<div class="modal fade" id="editar<?=$num?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Equipo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('equipments.update', $equipment->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre del equipo</label>
                  <input type="text" class="form-control" id="recipient-name" name="equipment" value="{{ $equipment->equipment }}">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Modelo</label>
                    <input type="text" class="form-control" id="recipient-name" name="model" value="{{ $equipment->model }}">
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Marca</label>
                    <input type="text" class="form-control" id="recipient-name" name="brand" value="{{ $equipment->brand }}">
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Categoria</label>
                    <select id="" name="category_id" type="number" class="form-control" tabindex="3">
                        @foreach ($categories as $category)
                         <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endforeach
                    </select>

                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Detalle</label>
                    <input type="text" class="form-control" id="recipient-name" name="detail" value="{{ $equipment->detail }}">
                  </div>


                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">N° Inventario</label>
                    <input type="number" class="form-control" id="recipient-name" name="n_inventory" value="{{ $equipment->n_inventory }}">
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
              </form>
        </div>

      </div>
    </div>
  </div>
