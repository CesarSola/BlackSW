<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create" require style="color: black !important">Agregar el tipo de dispositivo</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('tipodispositivo.store')}}" method="post" enctype="multipart/form-data">
          @csrf
      <div class="modal-body">
        <div class="mb-3">
          <label for="">Tipo</label>
          <input type="text" 
          class="form-control" name="tipo" id="" aria-describedby="helpId" placeholder="">
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
   
  
  
  
   