@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
   
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    
                      <h1 class="card-title text-uppercase text-muted mb-0">CAMA SENSOR</h1>


                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Nuevo
                      </button>
  <br><br>
    <div class="table-responsive">
      <table class="table">
            <thead class="bg-success text-white">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Fecha de instalación</th>
                  <th scope="col">Cama</th>
                  <th scope="col">Sensor </th>
                  <th scope="col">Acciones</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($cama_sensor as $cama_sensor )
              <tr>
                  <td scope="row">{{$cama_sensor->id}}</td>
                  <td>{{$cama_sensor->fecha_instalacion}}</td>
                  <td>{{$cama_sensor->cama->nombre}}</td>
                  <td>
                   {{$cama_sensor->sensor->nombre}}
                  </td>
                 
                  <td> 
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$cama_sensor->id}}">
                    Editar
                  </button>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$cama_sensor->id}}">
                    Eliminar
                  </button>
                 </td>
              </tr>
                 @include('camaSensor.info')
                @endforeach
              </tbody>
            </table>
          </div>
        @include('camaSensor.create')				
        </div>
        @endsection
      </div>
      </div>
       

    