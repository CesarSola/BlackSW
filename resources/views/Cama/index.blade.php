@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">CAMAS</h1>
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
                     <th scope="col">Largo</th>
                     <th scope="col">Ancho</th>
                     <th scope="col">Pertenece al invernadero: </th>
                     <th scope="col">Accion</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($camas as $cama )
                 <tr>
                     <td scope="row">{{$cama->id}}</td>
                     <td>{{$cama->nombre}}</td>
                     <td>{{$cama->largo}}</td>
                     <td>{{$cama->ancho}}</td>
                     <td>
                       {{$cama->Invernadero->nombre}}
                     </td>
                     <td>  
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$cama->id}}">
                         Editar
                       </button>
                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$cama->id}}">
                         Eliminar
                       </button></td>
                       
                 </tr>
                    @include('Cama.info')
                   @endforeach
                 </tbody>
               </table>
             </div>
           @include('Cama.create')				
           </div>
        
        </tbody>
    </table>
@endsection
