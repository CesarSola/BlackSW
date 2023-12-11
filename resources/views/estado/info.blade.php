 <!-- Modal edit -->
 <div class="modal fade" id="edit{{$estado->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title Fs-5" id="exampleModalLabel" require style="color: black !important">Editar estado</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('estado.update',$estado->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
           <div class="mb-3">
            <label for="">Tipo</label>
           <input type="text"
           class="form-control" name="tipo" id="" aria-describedby="helpId" placeholder="" value="{{$estado->estado}}">
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
   <div class="modal fade" id="delete{{$estado->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel" require style="color: black !important">Eliminar estado</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('estado.update',$estado->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
         Estas seguro de eliminar a <strong>{{$estado->id}} ? </strong>
                 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
      </div>
    </form>
   </div>
  </div>
  </div>
  </div>
  </div>
  </div>