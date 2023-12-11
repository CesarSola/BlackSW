@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')

    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Usuarios</h1>
        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addUserModal">
            Agregar Usuario
        </button>
    </div>

    <br><br>

    <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Password</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
                        </td>
                        <td>{{ $user->password }}</td>
                        <td>
                            @can('editar')
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$user->id}}">
                                    Editar
                                </button>
                            @endcan
                            @can('eliminar')
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$user->id}}">
                                    Eliminar
                                </button>
                            @endcan
                        </td>
                    </tr>
                    @include('profile.edit')
                @endforeach
            </tbody>
        </table>
    </div>
    @include('profile.crear')

@endsection
