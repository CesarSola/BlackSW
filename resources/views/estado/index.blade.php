@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">ESTADO</h1>
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
                     <th scope="col">Estado</th>
                     <th scope="col">Dispositivo</th>
                     <th scope="col">Acciones</th>
                 </tr>
             </thead>
             <tbody>
                @foreach($estados as $estado)
                 <tr>
                     <td scope="row">{{$estado->id}}</td>
                     <td>{{$estado->estado}}</td>
                     <td>
     
                       <ul>
     
                           @foreach ($estado->dispositivos as $dispositivo)
                               <li value="{{$dispositivo->id}}">{{ $dispositivo->nombre }}</li>
                           @endforeach
     
                       </ul>
     
                     </td>
     
                     <td>  
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$estado->id}}">
                           Editar
                         </button>
                         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$estado->id}}">
                           Eliminar
                         </button></td>
                 </tr>
                 @include('estado.info')
                 @endforeach
             </tbody>
         </table>
     </div>
     @include('estado.create')
   
   </div>
        </tbody>
    </table>
@endsection

