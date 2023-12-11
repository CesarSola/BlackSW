  <!-- Modal crear -->
  <style>
    /* Archivo de estilos CSS */
.custom-label {
    color: black;
}

.custom-input {
    color: black !important;
}

.custom-select {
    color: black;
}

  </style>
  <div class="modal fade" id="edit{{$cama_sensor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel" style="color: black">Editar cama sensor</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
        <form method="POST" action="{{ route('camaSensor.update', $cama_sensor->id) }}">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label for="" class="custom-label">FECHA INSTALACION</label>
                  <input type="text" name="fecha_instalacion" id="" class="form-control custom-input" value="{{$cama_sensor->fecha_instalacion}}" required>
              </div>
             
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Cama</label>
                <select name="cama_id" id="" class="form-control" >
                    @foreach ($camas as $id => $nombre)
                    <option value="{{$id}}"> {{$nombre}}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Sensores</label>
                <select name="sensor_id" id="" class="form-control" >
                    @foreach ($sensores as $id => $nombre)
                    <option value="{{$id}}"> {{$nombre}}</option>
                    @endforeach
                </select>
              </div>
            </div>
           
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>



  <!-- Modal eliminar -->
  <div class="modal fade" id="delete{{$cama_sensor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel" style="color: black">Eliminar cama sensor</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('camaSensor.destroy',$cama_sensor->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
        <p style="color: black">¿Estas  seguro de eliminar a <strong>{{$cama_sensor->id}} ?</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    </div>
  </div>
