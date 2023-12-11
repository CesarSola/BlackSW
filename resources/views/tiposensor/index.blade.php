@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">TIPO DE SENSOR</h1>
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
                   <th scope="col">Tipo </th>
                   <th scope="col">Sensores </th>
                   <th scope="col">Acciones</th>
                   <th></th>
                 
                 </tr>
             </thead>
             <tbody>
             @foreach ($tiposensor as $tiposensor)
                <tr>   
                <td scope="row">{{$tiposensor->id}}</td>
                 <td>{{$tiposensor->tipo}}</td>    
                 <td>
     <ul>
       @foreach($tiposensor->sensores as $sensor)
         <li>{{$sensor->nombre}}</li>
       @endforeach
     </ul>
   </td>
   <td>  
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$tiposensor->id}}">
       Editar
     </button>
     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$tiposensor->id}}">
       Eliminar
     </button></td>
   </tr>
   @include('tiposensor.editar')
   @endforeach
   </tbody>
   </table>
   </div>
   @include('tiposensor.agregar')
   
@endsection
