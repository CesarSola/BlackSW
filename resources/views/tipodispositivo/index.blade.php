@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <h1 class="card-title text-uppercase text-muted mb-0">TIPO-DISPOSITIVO</h1>



<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Nuevo
  </button>
  <br><br>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
                <thead class="bg-success text-white">
                    <tr>
                     <th scope="col">Id</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Dispositivo</th>
                    <th>Acciones</th>
                    <th></th>
                    </tr>
                </thead>
             
              <tbody>
                 @foreach($tipos as $tipo)
                  <tr>
                      <td  scope="row">{{$tipo->id}}</td>
                      <td>{{$tipo->tipo}}</td>
                      <td>

                        <ul>

                            @foreach ($tipo->dispositivos as $dispositivo)
                                <li value="{{$dispositivo->id}}">{{ $dispositivo->nombre }}</li>
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
                  @include('tipodispositivo.info')
                  @endforeach
              </tbody>
          </table>
      </div>
      @include('tipodispositivo.create')
@endsection



