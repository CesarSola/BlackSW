  
  <!-- Modal Editar -->
  <div class="modal fade" id="edit{{$tipo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Editar el tipo de cultivo</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('Tipocultivo.update',$tipo->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">

            <label for="" class="form-label" require style="color: black !important">Tipo</label>
            <input type="text"
              class="form-control" name="tipo" id="" aria-describedby="helpId" placeholder="" value="{{$tipo->tipo}}" require style="color: black !important">
           
          </div>
          


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>



  <!-- Modal Eliminar -->
  <div class="modal fade" id="delete{{$tipo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Eliminar el tipo de cultivo</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('Tipocultivo.destroy',$tipo->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">
         Estas seguro de eliminar a <strong>{{$tipo->tipo}} ?</strong>
        </div>
        <div class="modal-footer">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </div>
    </form>
      </div>
    </div>
  </div>