
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$invernadero->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">EDITAR INVERNADERO</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
       
    <form action="{{route('invernadero.update',$invernadero->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  <div class="modal-body">
    <div class="mb-3">

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Nombre</label>
        <input type="text"
          class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->nombre}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Longitud</label>
        <input type="text"
          class="form-control" name="longitud" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->longitud}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">latitud</label>
        <input type="text"
          class="form-control" name="latitud" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->latitud}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Ancho</label>
        <input type="text"
          class="form-control" name="ancho" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->ancho}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Alto</label>
        <input type="text"
          class="form-control" name="alto" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->alto}}" require style="color: black !important">
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Largo</label>
        <input type="text"
          class="form-control" name="largo" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->largo}}" require style="color: black !important">
      </div>
      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Descripcion</label>
        <input type="text"
          class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$invernadero->descripcion}}" require style="color: black !important">
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



<!-- Modal delete-->
<div class="modal fade" id="delete{{$invernadero->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Eliminar invernadero</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </div>
        <form action="{{route('invernadero.destroy',$invernadero->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
            <p style="color: black">¿Estas seguro que quieres eliminar el registro <strong>{{$invernadero->id}}</strong></p>
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
  
</html>