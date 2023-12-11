@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">INVERNADERO</h1>
       
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
                      <th scope="col">Longitud</th>
                      <th scope="col">Latitud</th>
                      <th scope="col">Ancho</th>
                      <th scope="col">Alto</th>
                      <th scope="col">Largo</th>
                      <th scope="col">Descripcion</th>
                      <th>Camas</th>
                      <th scope="col">Accion</th>
    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($invernaderos as $invernadero)
                    <tr>
        
                      <td>{{$invernadero->id}}</td>
                      <td>{{$invernadero->nombre}}</td>
                      <td>{{$invernadero->longitud}}</td>
                      <td>{{$invernadero->latitud}}</td>
                      <td>{{$invernadero->ancho}}</td>
                      <td>{{$invernadero->alto}}</td>
                      <td>{{$invernadero->largo}}</td>
                      <td>{{$invernadero->descripcion}}</td>
                     <td>
                      @foreach ($invernadero->camas as $cama)
                          <li>{{$cama->nombre}}</li>
    
                      @endforeach
                     </td>
                     <td>  
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$invernadero->id}}">
                         Editar
                       </button>
                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$invernadero->id}}">
                         Eliminar
                       </button >
                      <!-- Reemplaza el botón Ver actual con un enlace -->
<a href="{{ route('invernadero.show', $invernadero->id) }}" class="btn btn-warning btn-sm">
  Ver
</a>

                      </td>
                    </tr>
                     @include('invernadero.edit')
                    @endforeach
                  </tbody>
                </table>
              </div>
            @include('invernadero.create')				
            </div>
          </div>
        </tbody>
    </table>
@endsection

