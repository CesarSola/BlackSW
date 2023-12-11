
<h1 class="card-title text-uppercase text-muted mb-0">CULTIVOS-CAMA</h1>
<!--End topbar header-->
<!--EMPIEZA CRUD-->
@extends('welcome')
@section('content')

<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
   NUEVO
  </button>
  <br><br>
    <div class="table-responsive">
      <table class="table">
            <thead class="bg-success text-white">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Fecha de la siembra</th>
                  <th scope="col">Fecha de la Cosecha</th>
                  <th scope="col">Ubicacion de la cama</th>
                  <th scope="col">Pertenece a la cama: </th>
                  <th scope="col">Pertenece al cultivo: </th>
                  <th scope="col">ACCION</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($cultivos_camas as $cultivo_cama )
              <tr>
                  <td scope="row">{{$cultivo_cama->id}}</td>
                  <td>{{$cultivo_cama->fecha_siembra}}</td>
                  <td>{{$cultivo_cama->fecha_cosecha}}</td>
                  <td>{{$cultivo_cama->ubicacion_cama}}</td>
                  <td>
                   {{$cultivo_cama->cama->nombre}}
                  </td>
                  <td> 
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$cultivo_cama->id}}">
                      EDITAR
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$cultivo_cama->id}}">
                      ELIMINAR
                    </button>
                   </td>
              </tr>
                 @include('cultivo_cama.edit')
                @endforeach
              </tbody>
            </table>
          </div>
        @include('cultivo_cama.create')				
        </div>
            
@endsection
</div>
</div>
    