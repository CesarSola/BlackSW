  
  <!-- Modal Create -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Agregar sensor</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <form action="{{route('Sensor.store')}}" method="post">
            @csrf
            <div class="modal-body">

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
            </div>
  
            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Numero de Serie</label>
              <input type="text" class="form-control" name="numero_serie" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
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
              <label for="" class="form-label" require style="color: black !important">Topic</label>
              <input type="text" class="form-control" name="topic" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
            </div>

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Tipo</label>
              <select name="tipo_sensor_id" id="" class="form-control" >
                  @foreach ($tipos as $tipo)
                  <option value="{{$tipo->id}}"> {{$tipo->tipo}}</option>
                  @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Estado</label>
              <select name="estado_id" id="" class="form-control" >
                @foreach ($estado as $estado)
                <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
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