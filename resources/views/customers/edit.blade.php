<!-- Modal -->
<div class="modal fade" id="editar<?=$num?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombres</label>
                  <input type="text" class="form-control" id="recipient-name" name="name" value="{{ $customer->name }}">
                </div>


                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Apellidos</label>
                    <input type="text" class="form-control" id="recipient-name" name="lastname" value="{{ $customer->lastname }}">
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Identificacion_Nit</label>
                    <input type="text" class="form-control" id="recipient-name" name="identification_nit" value="{{ $customer->identification_nit}}">
                </div>

                <div class="form-group">
                    <label for="message-text" class="col-form-label">Direccion</label>
                    <textarea class="form-control" id="message-text" name="address" value="{{ $customer->address }}"></textarea>
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Correo</label>
                    <input type="text" class="form-control" id="recipient-name" name="email" value="{{ $customer->email }}">
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Telefono</label>
                    <input type="text" class="form-control" id="recipient-name" name="telephone" value="{{ $customer->telephone }}">
                </div>

                <div class="form-group">
                    <label for="message-text" class="col-form-label">Descripcion</label>
                    <textarea class="form-control" id="message-text" name="description" value="{{ $customer->description }}"></textarea>
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
