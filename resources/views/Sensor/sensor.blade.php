@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">SENSORES</h1>
       
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
   
  
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Nuevo
    </button>
   
      <br><br>
        
      <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
              <tr>
                <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Numero <br>de serie</th>
                  <th scope="col">modelo</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Topic</th>
                  <th scope="col">Tipo<br> sensor</th>
                  <th scope="col">Estado<br> sensor</th>
                   <th scope="col">Accion</th>
                  
                   
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($sensores as $sensores)
                <tr>   
               <td>{{$sensores->id}}</td>
               <td >{{$sensores->nombre}}</td>
               <td>{{$sensores->numero_serie}}</td>
               <td>{{$sensores->modelo}}</td>
               <td>{{$sensores->descripcion}}</td>
               <td>{{$sensores->topic}}</td>
               <td>{{$sensores->tipo->tipo}}</td>
               <td>{{$sensores->estado->estado}}</td>
               
                 <td>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$sensores->id}}">
                         Editar
                       </button>
                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$sensores->id}}">
                         Elimnar
                       </button>
                      </td>
                    </tr>
       @include('Sensor.editarSensor')
       @endforeach
           
       <tbody>
      </table>
    </div>
       @include('Sensor.registrarSensor')
      </div>
    </div>
  </tbody>
</table>
@endsection
