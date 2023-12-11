{{-- resources/views/roles/index.blade.php --}}

@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Roles y Permisos</h2>
        
        <a href="{{ route('roles.store') }}" class="btn btn-primary mb-2">Crear Rol</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>
                @foreach ($role->permissions as $permission)
                    {{ $permission->name }},
                @endforeach
            </td>
            <td>
                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este rol?')">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
            </tbody>
        </table>
    </div>
@endsection
