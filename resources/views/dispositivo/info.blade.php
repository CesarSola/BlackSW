
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$dispositivo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title Fs-5" id="exampleModalLabel" require style="color: black !important">Editar dispositivo inteligente</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         
        </div>
        <form action="{{route('dispositivo.update', $dispositivo->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$dispositivo->nombre}}" require style="color: black !important">
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Modelo</label>
            <input type="text"
              class="form-control" name="modelo" id="" aria-describedby="helpId" placeholder="" value="{{$dispositivo->modelo}}" require style="color: black !important">
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Descripcion</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$dispositivo->descripcion}}" require style="color: black !important">
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Alcance</label>
            <input type="text"
              class="form-control" name="alcance" id="" aria-describedby="helpId" placeholder="" value="{{$dispositivo->alcance}}" require style="color: black !important">
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Topic</label>
            <input type="text"
              class="form-control" name="topic" id="" aria-describedby="helpId" placeholder="" value="{{$dispositivo->topic}}" require style="color: black !important">
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Tipo</label>
            <select name="tipo_disp_intel_id" id="" class="form-control" require style="color: black !important" sty>
                @foreach ($tipos as $tipo)
                @if ($tipo->id == $dispositivo->tipo_disp_intel_id)
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
              @foreach ($estados as $estado)
              @if ($estado->id == $dispositivo->estado_id)
              <option value="{{$estado->id}}" selected>{{$estado->estado}}</option>
              @else
                  <option value="{{$estado->id}}">{{$estado->estado}}</option>
              @endif

  
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="" class="form-label" require style="color: black !important">Cama</label>
            <select name="cama_id" id="" class="form-control" require style="color: black !important" sty>
              @foreach ($camas as $cama)
                @if ($cama->id == $dispositivo->cama_id)
                <option value="{{$cama->id}}">{{$cama->nombre}}</option>
                @else
                <option value="{{$cama->id}}" selected>{{$cama->nombre}}</option>
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


  
  
  
   <!-- Modal delete -->
   <div class="modal fade" id="delete{{$dispositivo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title-Fs-5" id="exampleModalLabel" require style="color: black !important">Eliminar dispositivo inteligente</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form action="{{route('dispositivo.destroy',$dispositivo->id)}}" method="post"> 
            @csrf
            @method('DELETE')
        <div class="modal-body">
         Estas seguro de eliminar a <strong>{{$dispositivo->nombre}} ? </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
      </div>
   </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  
  
  
   