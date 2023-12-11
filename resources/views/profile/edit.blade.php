  <!-- Modal crear -->
  <style>
    /* Archivo de estilos CSS */
.custom-label {
    color: black;
}

.custom-input {
    color: black !important;
}

.custom-select {
    color: black;
}

  </style>
  <div class="modal fade" id="edit{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
        <form method="POST" action="{{ route('users.update', $user->id) }}">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label for="" class="custom-label">NOMBRE</label>
                  <input type="text" name="name" id="" class="form-control custom-input" value="{{$user->name}}" required>
              </div>
              <div class="mb-3">
                  <label for="" class="custom-label">EMAIL</label>
                  <input type="text" name="email" id="" class="form-control custom-input" value="{{$user->email}}" required>
              </div>
              <div class="mb-3">
                  <label for="" class="custom-label">ROLES</label>
                  <input type="text" name="role" id="" class="form-control custom-input" value="{{$user->role}}" required>
              </div>
              
      
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>



  <!-- Modal eliminar -->
  <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color: black">Eliminar users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('users.destroy',$user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
        <p style="color: black">¿Estas  seguro de eliminar a <strong>{{$user->nombre}} ?</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    </div>
  </div>
