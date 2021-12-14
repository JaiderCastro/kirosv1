<!-- Modal -->
<div class="modal fade" id="editar<?=$num?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route ('service.update', $service->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Equipo</label>
                    <select id="" name="equipment_id" type="number" class="form-control" tabindex="3">
                        @foreach ($equipments as $row)
                         <option value="{{ $row->id }}">{{ $row->equipment }}</option>
                        @endforeach
                    </select>

                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Cliente</label>
                    <select id="" name="customer_id" type="text" class="form-control" tabindex="3">
                        @foreach ($customers as $customer)
                         <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>

                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Usuario</label>
                    <select id="" name="user_id" type="number" class="form-control" tabindex="3">
                        @foreach ($user as $item)
                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Estado</label>
                    <select id="" name="state" type="number" class="form-control" tabindex="3">

                         <option value="solicitado">Solicitado</option>
                         <option value="Realizado">Realizado</option>

                    </select>

                  </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tipo de servicio</label>
                  <input type="text" class="form-control" id="recipient-name" name="type_service" value="{{ $service->type_service }}"required>
                </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Descripcion</label>
                    <input type="text" class="form-control" id="recipient-name" name="description" value="{{ $service->description }}"required>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Fecha de ingreso</label>
                    <input type="date" class="form-control" id="recipient-name" name="date_entry" value="{{ $service->date_entry }}" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Fecha de entrega</label>
                    <input type="date" class="form-control" id="recipient-name" name="deadline" value="{{ $service->deadline }}" required>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Diagnostico</label>
                    <input type="text" class="form-control" id="recipient-name" name="solution_diagn" value="{{ $service->solution_diagn }}"required>
                  </div>





                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Detalle</label>
                    <input class="form-control" id="message-text" name="detail" value="{{ $service->detail }}" required>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Total</label>
                    <input type="text" class="form-control" id="recipient-name" name="total" value="{{ $service->total }}" required>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Editar Servicio</button>
                </div>
              </form>
        </div>

      </div>
    </div>
  </div>
