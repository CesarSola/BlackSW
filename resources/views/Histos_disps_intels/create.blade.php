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
        <f action="{{route('Histos_disps_intels.store')}}" method="post">
          @csrf
      <div class="modal-body">

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Fecha de inicio</label>
          <input type="date" class="form-control" name="fecha_inicio" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Hora</label>
          <input type="time" class="form-control" name="hora" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Valor</label>
          <input type="text" class="form-control" name="valor" id="" aria-describedby="helpId" placeholder="" require style="color: black !important">
        </div>

        <div class="mb-3">
          <label for="" class="form-label" require style="color: black !important">Dispositivo</label>
          <select name="disp_intel_id" id="" class="form-control" >
              @foreach ($dispositivos as $dispositivo)
              <option value="{{$dispositivo->id}}"> {{$dispositivo->nombre}}</option>
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
   