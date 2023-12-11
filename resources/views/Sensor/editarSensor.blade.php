 <!-- Modal Editar -->
 <div class="modal fade" id="edit{{$sensores->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Editar sensor</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </div>
      <form action="{{route('Sensor.update',$sensores->id)}}" method="post">
          @csrf
          @method('PUT')
      <div class="modal-body">

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$sensores->nombre}}" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Numero de serie</label>
          <input type="text"
            class="form-control" name="numero_serie" id="" aria-describedby="helpId" placeholder="" value="{{$sensores->numero_serie}}" require style="color: black !important">
        </div>


      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Modelo</label>
        <input type="text"
          class="form-control" name="modelo" id="" aria-describedby="helpId" placeholder="" value="{{$sensores->modelo}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Descripcion</label>
        <input type="text"
          class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$sensores->descripcion}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Topic</label>
        <input type="text"
          class="form-control" name="topic" id="" aria-describedby="helpId" placeholder="" value="{{$sensores->topic}}" require style="color: black !important">
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Tipo</label>
        <select name="tipo_sensor_id" id="" class="form-control" require style="color: black !important" sty>
            @foreach ($tipos as $tipo)
            @if ($tipo->id == $sensores->tipo_sensor_id)
            <option value="{{$tipo->id}}" selected > {{$tipo->tipo}}</option>
            @else
            <option value="{{$tipo->id}}"> {{$tipo->tipo}}</option>
            @endif
            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="" class="form-label" require style="color: black !important">Estado</label>
        <select name="estado_id" id="" class="form-control" require style="color: black !important" sty>
          @foreach ($estado as $estado)
            @if ($tipo->id == $sensores->estado_id)
            <option value="{{ $estado->id }}" selected>{{ $estado->estado }}</option>
            @else
            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
            @endif
            @endforeach
        </select>
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
  <div class="modal fade" id="delete{{$sensores->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar sensor</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <form action="{{route('Sensor.destroy',$sensores->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          
            Estas seguro de eliminar a <strong>{{$sensores->nombre}} ?</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>

