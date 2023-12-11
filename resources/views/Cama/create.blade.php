<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create" require style="color: black !important">Agregar cama</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('Cama.store')}}" method="post">
          @csrf
      <div class="modal-body">
        
        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Largo</label>
          <input type="text"
            class="form-control" name="largo" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

            <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Ancho</label>
          <input type="text"
            class="form-control" name="ancho" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Invernadero</label>
          <select name="invernadero_id" id="" class="form-control" >
             @foreach ($invernaderos as $id => $nombre)
                 <option value="{{$id}}">{{$nombre}}</option>
             @endforeach
          </select>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
    </div>
  </div>
  </div>
  
  
</div>
   