@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
        </ol>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            @if(!auth()->user()->admin == 1)
            <a class="btn btn-secondary btn-add" role="button" onclick="mensaje()">Add</a>
            @else
            <a class="btn btn-success btn-add" href="{{ route('usuarioCreate') }}" role="button">Nuevo</a>
            @endif
            <form class="d-flex" action="{{ route('usuarioList') }}" method="get">
                <input class="form-control me-2" type="search" name="buscador" value="" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="table-responsive">
        <table class="table table-light table-striped">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Fecha de actualización</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            
                @if(count($usuarios)<=0) <tr>
                    <td colspan="8">No hay resultados.</td>
                    </tr>
                    @else
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope=row>{{ $usuario->id}}</th>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->phone }}</td>
                        @if($usuario->admin == true)
                        <td>Si</td>
                        @else
                        <td>No</td>
                        @endif
                        <td>{{ $usuario->created_at }}</td>
                        <td>{{ $usuario->updated_at }}</td>
                        @if(!auth()->user()->admin == 1)
                        <td>
                            <a class="btn btn-secondary" onclick="mensaje()">Editar</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-secondary" onclick="mensaje()">
                                Eliminar
                            </button>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-primary" href="{{ route('usuarioEdit', $usuario->id) }}">Editar</a>
                        </td>
                        <td>
                            <form class="d-flex" action="{{ route('usuarioDelete', $usuario->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                    @endif
            </tbody>
        </table>
    </div>
    {{ $usuarios->links() }}
</div>

<script>
    function mensaje() {
        window.alert("Solicitar permisos a Administrador!");
    }
</script>
@endsection