  <!-- Modal Create -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">AGREGAR CULTIVO-CAMA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('cultivo_cama.store')}}" method="post">
            @csrf
        <div class="modal-body">

          <div class="mb-3">

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Fecha de la siembra</label>
              <input type="date"
                class="form-control" name="fecha_siembra" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
            </div>

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Fecha de la cosecha</label>
              <input type="date"
                class="form-control" name="fecha_cosecha" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
            </div>

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Ubicacion de la cama</label>
              <input type="text"
                class="form-control" name="ubicacion_cama" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
            </div>
  
          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Cultivo</label>
            <select name="cultivo_id" id="" class="form-control" >
                @foreach ($cultivos as $cultivo)
                <option value="{{$cultivo->id}}"> {{$cultivo->nombre}}</option>
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Cama</label>
            <select name="cama_id" id="" class="form-control" >
                @foreach ($camas as $cama)
                <option value="{{$cama->id}}"> {{$cama->nombre}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!-- Modal crear -->

