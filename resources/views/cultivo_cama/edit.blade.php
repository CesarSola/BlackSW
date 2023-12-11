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
  <div class="modal fade" id="edit{{$cultivo_cama->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black">EDITAR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
        <form method="POST" action="{{ route('cultivo_cama.update', $cultivo_cama->id) }}">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                <strong><label for="" style="color: black">Fecha de la siembra</label></strong>
                  <input type="date" name="fechaSiembra" id="" class="form-control" value="{{$cultivo_cama->fecha_siembra}}" required>
              </div>
              <div class="mb-3">
                <strong><label for="" style="color: black">Fecha de la cosecha</label></strong>
                  <input type="date" name="fechaCosecha" id="" class="form-control" value="{{$cultivo_cama->fecha_cosecha}}" required>
              </div>
              <div class="mb-3">
                <strong><label for="" style="color: black">Ubicacion de la cama</label></strong>
                  <input type="text" name="ubicacionCama" id="" class="form-control" value="{{$cultivo_cama->ubicacion_cama}}" required>
              </div>
              <div class="col-sm-12">
                <strong><label for="" style="color: black">Camas</label></strong>
                <select class="form-control" name="cama_id"  require style="color: black !important;">
                  @foreach ($camas as $cama)
                  <option value="{{$cama->id}}"> {{$cama->nombre}}</option>
                  @endforeach
                </select>
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
  <div class="modal fade" id="delete{{$cultivo_cama->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black">ELIMINAR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('cultivo_cama.destroy',$cultivo_cama->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
        <p style="color: black">¿Estas  seguro de eliminar a <strong>{{$cultivo_cama->nombre}} ?</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    </div>
  </div>
