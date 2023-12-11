@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">HISTORIAL DE DISPOSITIVO INTELIGENTE</h1>
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
                       <th>Id</th>
                       <th>Fecha de inicio</th>
                       <th>Hora</th>
                       <th>Valor</th>
                       <th>Dispositivo inteligente</th>
                       <th>Acciones</th>
                       <th></th>
                   </tr>
               </thead>
   
               <tbody>
                   @foreach($historiales as $historial)
                   <tr>
                       <td>{{ $historial->id }}</td>
                       <td>{{ $historial->fecha_inicio }}</td>
                       <td>{{ $historial->hora }}</td>
                       <td>{{ $historial->valor }}</td>
                       <td>{{ $historial->dispositivos->nombre }}</td>
                       <td>  
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$historial->id}}">
                           Editar
                         </button>
                         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$historial->id}}">
                           Eliminar
                         </button></td>
             </tr>
             @include('Histos_disps_intels.edit')
             @endforeach
         </tbody>
     </table>
   </div>
   @include('Histos_disps_intels.create')
   
        </tbody>
    </table>
@endsection
