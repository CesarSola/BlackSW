<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create" require style="color: black !important">Agregar dispositivo inteligente</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('dispositivo.store')}}" method="post">
          @csrf
      <div class="modal-body">

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Modelo</label>
          <input type="text" class="form-control" name="modelo" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Alcance</label>
          <input type="text" class="form-control" name="alcance" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Topic</label>
          <input type="text" class="form-control" name="topic" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Tipo dispositivo inteligente</label>
          <select name="tipo_disp_intel_id" id="" class="form-control" >
              @foreach ($tipos as $tipo)
              <option value="{{$tipo->id}}"> {{$tipo->tipo}}</option>
              @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Cama</label>
          <select name="cama_id" id="" class="form-control" >
              @foreach ($camas as $cama)
              <option value="{{$cama->id}}">{{$cama->nombre}}</option>
              @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Estado</label>
          <select name="estado_id" id="" class="form-control" >
            @foreach ($estados as $estado)
            <option value="{{$estado->id}}">{{$estado->estado}}</option>
            @endforeach
          </select>
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
   