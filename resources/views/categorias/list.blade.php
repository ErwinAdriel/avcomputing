@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Marcas</li>
        </ol>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="btn btn-success btn-add" href="{{ route('marcaCreate') }}" role="button">Nuevo</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" aria-label="Search">
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
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Fecha de modificación</th>
                    <th scope="col">Acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($marcas as $marca)
                <tr>
                    <th scope="row">{{ $marca->id }}</th>
                    <td>{{ $marca->name }}</td>
                    <td>{{ $marca->created_at }}</td>
                    <td>{{ $marca->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('marcaEdit', $marca->id) }}">Editar</a>
                    </td>
                    <td>
                        <form class="d-flex" action="{{ route('marcaDelete', $marca->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
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