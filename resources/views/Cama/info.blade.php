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
  <div class="modal fade" id="edit{{$cama->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
        <form method="POST" action="{{ route('Cama.update', $cama->id) }}">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label for="" class="custom-label">NOMBRE</label>
                  <input type="text" name="nombre" id="" class="form-control custom-input" value="{{$cama->nombre}}" required>
              </div>
              <div class="mb-3">
                  <label for="" class="custom-label">LARGO</label>
                  <input type="text" name="largo" id="" class="form-control custom-input" value="{{$cama->largo}}" required>
              </div>
              <div class="mb-3">
                  <label for="" class="custom-label">ANCHO</label>
                  <input type="text" name="ancho" id="" class="form-control custom-input" value="{{$cama->ancho}}" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Invernadero</label>
                <select name="invernadero_id" id="" class="form-control" >
                   @foreach ($invernaderos as $id => $nombre)
                       <option value="{{$id}}">{{$nombre}}</option>
                   @endforeach
                </select>
              </div>
      
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary">Actualizar</button>
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
  <div class="modal fade" id="delete{{$cama->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black">Eliminar cama</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('Cama.destroy',$cama->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
        <p style="color: black">¿Estas  seguro de eliminar a <strong>{{$cama->nombre}} ?</strong></p>
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
