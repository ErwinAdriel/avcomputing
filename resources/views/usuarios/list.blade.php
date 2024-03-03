@extends('app')
@section('content')
@include('navbar')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
        </ol>
    </nav>
    <a class="btn btn-success btn-add" href="" role="button">Add</a>
    <div class="table-style">
        <table class="table table-responsive-sm table-style2 table-bordered">
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
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td scope=row>{{ $usuario->id}}</td>
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
                    <td>
                        <a class="btn btn-primary" href="usuarios/{{$usuario->id}}/edit">Editar</a>
                        <button type="button" class="btn btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<script>
    function onDelete(id, model) {
        const result = confirm("Está seguro de que desea eliminar este registro?");
        const url = `/${model}/${id}`;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (result) {
            $.ajax({
                type: "DELETE",
                url,
                success: function() {
                    location.reload();
                }
            })
        }
    }
</script>
@endsection