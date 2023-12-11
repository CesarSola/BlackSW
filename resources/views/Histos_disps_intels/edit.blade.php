 <!-- Modal Editar -->
 <div class="modal fade" id="edit{{$historial->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">Editar historial de dispositivo inteligente</h1>
 
      </div>
      <form action="{{route('Histos_disps_intels.update',$historial->id)}}" method="post">
          @csrf
          @method('PUT')
      <div class="modal-body">
        
          <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Fecha de inicio</label>
              <input type="date"
                class="form-control" name="fecha_inicio" id="" aria-describedby="helpId" placeholder="" value="{{$historial->fecha_inicio}}" require style="color: black !important">
            </div>

            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Hora</label>
              <input type="time"
                class="form-control" name="hora" id="" aria-describedby="helpId" placeholder="" value="{{$historial->hora}}" require style="color: black !important">
            </div>

            
            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Valor</label>
              <input type="text"
                class="form-control" name="valor" id="" aria-describedby="helpId" placeholder="" value="{{$historial->valor}}" require style="color: black !important">
            </div>
  
            <div class="mb-3">
              <label for="" class="form-label" require style="color: black !important">Tipo</label>
              <select name="disp_intel_id" id="" class="form-control" require style="color: black !important" sty>
                  @foreach ($dispositivos as $dispositivo)
                  @if ($dispositivo->id == $historial->disp_intel_id)
                  <option value="{{$dispositivo->id}}" selected > {{$dispositivo->nombre}}</option>
                  @else
                  <option value="{{$dispositivo->id}}"> {{$dispositivo->nombre}}</option>
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
   <div class="modal fade" id="delete{{$historial->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" require style="color: black !important">ELIMINAR HISTORIAL</h1>
          
        </div>
        <form action="{{route('Histos_disps_intels.destroy',$historial->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          
            Estas seguro de eliminar a <strong>{{$historial->fecha_inicio}} ?</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
