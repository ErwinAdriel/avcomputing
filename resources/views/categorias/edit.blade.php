@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item"><a href="/list">Marcas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <h5>EDITANDO MARCA</h5>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div>
        <form method="POST" action="{{ route('marcaUpdate', $marca->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $marca->name }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
            <a class="btn btn-primary mt-3" href="/list" role="button">Volver atras</a>
        </form>
    </div>
</div>

@endsection