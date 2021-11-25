<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre Del Usuario</label>
                  <input type="text" class="form-control" id="recipient-name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Numero De Identificacion</label>
                    <input type="text" class="form-control" id="recipient-name" name="docnumber" required>
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tipo De Usuario</label>
                    <select id="" name="type_user" type="text" class="form-control" tabindex="3">

                        <option value="Administrador">Administrador</option>
                        <option value="Empleado">Empleado</option>

                   </select>

                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="recipient-name" name="email" required>
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña</label>
                    <input type="password" class="form-control" id="recipient-name" name="password" required>
                </div>







                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Crear</button>
              </form>
        </div>


        </div>
      </div>
    </div>
  </div>
