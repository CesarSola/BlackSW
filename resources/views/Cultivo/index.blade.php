@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">CULTIVOS</h1>
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
                <th scope="col">Descripción</th>
                <th scope="col">Min humedad</th>
                <th scope="col">Max humedad</th>
                <th scope="col">Min luminusidad</th>
                <th scope="col">Max luminusidad</th>
                <th scope="col">Min temperatura</th>
                <th scope="col">Max temperatura</th>
                <th scope="col">Tiempo crecimiento</th>
                <th scope="col">Tiempo vida</th>
                <th scope="col">Tiempo siembra</th>
                <th scope="col">Imagen</th>
                <th scope="col">Tipo cultivo</th>
                <th>Acciones</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cultivos as $cultivo)
                    
               
                <tr class="">
                    <td scope="row">{{$cultivo->id}}</td>
                    <td>{{ $cultivo->nombre }}</td>
                    <td>{{ $cultivo->descripcion }}</td>
                    <td>{{ $cultivo->min_humedad }}</td>
                    <td>{{ $cultivo->max_humedad }}</td>
                    <td>{{ $cultivo->min_luminosidad }}</td>
                    <td>{{ $cultivo->max_luminosidad }}</td>
                    <td>{{ $cultivo->min_temperatura }}</td>
                    <td>{{ $cultivo->max_temperatura }}</td>
                    <td>{{ $cultivo->tiempo_crecimiento }}</td>
                    <td>{{ $cultivo->tiempo_vida }}</td>
                    <td>{{ $cultivo->tipo_sembrado }}</td>
                    <td>{{ $cultivo->imagen }}</td>
                    <td>{{ $cultivo->Tipo->tipo }}</td>
                    
                  <td> 
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$cultivo->id}}">
                      Editar
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$cultivo->id}}">
                      Eliminar
                    </button>
                   </td>
                </tr>
                @include('Cultivo.edit')
                @endforeach
            </tbody>
        </table>
    </div>
    @include('Cultivo.create')
  
    
        </tbody>
    </table>
@endsection
