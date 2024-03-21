@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item"><a href="/categorias/list">Categorias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <h5>EDITANDO CATEGORIA</h5>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div>
        <form method="POST" action="{{ route('categoriaUpdate', $categoria->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $categoria->name }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
            <a class="btn btn-primary mt-3" href="/categorias/list" role="button">Volver atras</a>
        </form>
    </div>
</div>

@endsection