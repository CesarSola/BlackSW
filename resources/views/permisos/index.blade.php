@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
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
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Permiso</th>
                    <th>Guard</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$permission->id}}">
                                Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$permission->id}}">
                                Eliminar
                              </button></td>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
             </div>
           @include('permisos.crear')				
           </div>
           @include('permisos.editar')	
        </tbody>
    </table>
@endsection
