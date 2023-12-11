@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">TIPO CULTIVO</h1>
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
                       <th scope="col">Tipo</th>
                       <th>Cultivo</th>
                       <th>Acciones</th>
                   </tr>
               </thead>
               <tbody>
                   @php
                       $i=1;
                   @endphp
                   @foreach ($tipos as $tipo)
                   <tr class="">
                       <td scope="row">{{$i++}}</td>
                       <td>{{$tipo->tipo}}</td>
                       <td>
                             <ul>
                                 @foreach ($tipo->cultivos as $cultivo)
                                     <li value="{{ $cultivo->id }}">{{ $cultivo->nombre }}</li>
                                 @endforeach
                             </ul>
                     </td>
                     <td>  
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$tipo->id}}">
                          Editar
                         </button>
                         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$tipo->id}}">
                           Eliminar
                         </button></td>
                   </tr>
                   @include('Tipo.edit')
                   @endforeach
               </tbody>
           </table>
       </div>
       @include('Tipo.create')
     
        </tbody>
    </table>
@endsection
