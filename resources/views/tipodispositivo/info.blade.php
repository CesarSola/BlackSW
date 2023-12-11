 <!-- Modal edit -->
 <div class="modal fade" id="edit{{$tipo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title Fs-5" id="exampleModalLabel" require style="color: black !important">Editar el tipo del dispositivo</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('tipodispositivo.update',$tipo->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
           <div class="mb-3">
            <label for="">Tipo</label>
           <input type="text"
           class="form-control" name="tipo" id="" aria-describedby="helpId" placeholder="" value="{{$tipo->tipo}}">
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <!-- Modal delete -->
   <div class="modal fade" id="delete{{$tipo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel" require style="color: black !important">Eliminar el tipo del dispositivo</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('tipodispositivo.destroy',$tipo->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
         Estas seguro de eliminar a <strong>{{$tipo->id}} ? </strong>
                 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </form>
   </div>
  </div>
  </div>
  </div>
  </div>
  </div>