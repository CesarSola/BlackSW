@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">DISPOSITIVO INTELIGENTE</h1>
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
                           <th scope="col">id</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Modelo</th>
                           <th scope="col">Descripción</th>
                           <th scope="col">Alcance</th>
                           <th scope="col">TOPIC</th>
                           <th scope="col">Tipo dispositivo</th>
                           <th scope="col">Estado</th>
                           <th scope="col">Cama</th>
                           <th scope="col">Acciones</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($dispositivos as $dispositivo)
           
                           <td scope="row">{{$dispositivo->id}}</td>
                           <td>{{$dispositivo->nombre}}</td>
                           <td>{{$dispositivo->modelo}}</td>
                           <td>{{$dispositivo->descripcion}}</td>
                           <td>{{$dispositivo->alcance}}</td>
                           <td>{{$dispositivo->topic}}</td>
                           <td>{{$dispositivo->tipo->tipo}}</td>
                           <td>{{$dispositivo->estados->estado}}</td>
                           <td>{{$dispositivo->camas->nombre}}</td>
                       
                           <td>  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$dispositivo->id}}">
                               Editar
                             </button>
                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$dispositivo->id}}">
                               Eliminar
                             </button></td>
                       </tr>
                       @include('dispositivo.info')
                       @endforeach
                   </tbody>
               </table>
               @include('dispositivo.create')
        </tbody>
    </table>
@endsection

