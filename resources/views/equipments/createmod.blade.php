<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Equipo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('equipments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre del equipo</label>
                  <input type="text" class="form-control" id="recipient-name" name="equipment" required>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Modelo</label>
                    <input type="text" class="form-control" id="recipient-name" name="model" required>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Marca</label>
                    <input type="text" class="form-control" id="recipient-name" name="brand" required>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Categoria</label>
                    <select id="" name="category_id" type="number" class="form-control" tabindex="3">
                        @foreach ($categories as $row)
                         <option value="{{ $row->id }}"> {{ $row->name }}</option>
                        @endforeach
                    </select>

                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Detalle</label>
                    <textarea class="form-control" id="message-text" name="detail" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">N° Inventario</label>
                    <input type="number" class="form-control" id="recipient-name" name="n_inventory" required>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
              </form>
        </div>

      </div>
    </div>
  </div>
