 <!-- Modal Editar -->
 <div class="modal fade" id="edit{{$cultivo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Editar cultivo</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <form action="{{route('Cultivo.update',$cultivo->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">
          
            <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Nombre</label>
                <input type="text"
                  class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->nombre}}" require style="color: black !important">
              </div>

              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Descripcion</label>
                <input type="text"
                  class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->descripcion}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Min Humedad</label>
                <input type="text"
                  class="form-control" name="min_humedad" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->min_humedad}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Max Humedad</label>
                <input type="text"
                  class="form-control" name="max_humedad" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->max_humedad}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Min luminusidad</label>
                <input type="text"
                  class="form-control" name="min_luminosidad" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->min_luminosidad}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Max Luminusidad</label>
                <input type="text"
                  class="form-control" name="max_luminosidad" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->max_luminosidad}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Min Temperatura</label>
                <input type="text"
                  class="form-control" name="min_temperatura" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->min_temperatura}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Max Temperatura</label>
                <input type="text"
                  class="form-control" name="max_temperatura" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->max_temperatura}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Tiempo Crecimiento</label>
                <input type="text"
                  class="form-control" name="tiempo_crecimiento" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->tiempo_crecimiento}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Tiempo Vida</label>
                <input type="text"
                  class="form-control" name="tiempo_vida" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->tiempo_vida}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Tipo Sembrado</label>
                <input type="text"
                  class="form-control" name="tipo_sembrado" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->tipo_sembrado}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Imagen</label>
                <input type="text"
                  class="form-control" name="imagen" id="" aria-describedby="helpId" placeholder="" value="{{$cultivo->imagen}}" require style="color: black !important">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label" require style="color: black !important">Tipo</label>
                <select name="tipo_cultivo_id" id="" class="form-control" require style="color: black !important" sty>
                    @foreach ($tipos as $tipo)
                    @if ($tipo->id == $cultivo->tipo_cultivo_id)
                    <option value="{{$tipo->id}}" selected > {{$tipo->tipo}}</option>
                    @else
                    <option value="{{$tipo->id}}"> {{$tipo->tipo}}</option>
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
 <div class="modal fade" id="delete{{$cultivo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar cultivo</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <form action="{{route('Cultivo.destroy',$cultivo->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          
            Estas seguro de eliminar a <strong>{{$cultivo->nombre}} ?</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
