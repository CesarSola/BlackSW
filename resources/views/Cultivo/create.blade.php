<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create" require style="color: black !important">Agregar cultivo</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('Cultivo.store')}}" method="post">
          @csrf
      <div class="modal-body">

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Min Humedad</label>
          <input type="text" class="form-control" name="min_humedad" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Max Humedad</label>
          <input type="text" class="form-control" name="max_humedad" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Min luminusidad</label>
          <input type="text" class="form-control" name="min_luminosidad" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Max Luminusidad</label>
          <input type="text" class="form-control" name="max_luminosidad" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Min Temperatura</label>
          <input type="text" class="form-control" name="min_temperatura" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Max Temperatura</label>
          <input type="text" class="form-control" name="max_temperatura" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Tiempo Crecimiento</label>
          <input type="text"  class="form-control" name="tiempo_crecimiento" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Tiempo Vida</label>
          <input type="text" class="form-control" name="tiempo_vida" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Tipo Sembrado</label>
          <input type="text" class="form-control" name="tipo_sembrado" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Imagen</label>
          <input type="text" class="form-control" name="imagen" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Tipo</label>
          <select name="tipo_cultivo_id" id="" class="form-control" >
              @foreach ($tipos as $tipo)
              <option value="{{$tipo->id}}"> {{$tipo->tipo}}</option>
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
   