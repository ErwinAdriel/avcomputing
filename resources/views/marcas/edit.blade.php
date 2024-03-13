@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/cargos">Marcas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <h5 class="h5Add">EDIT RECORD</h5>
    <div class="form-add">
        <form method="POST" action="{{ route('marcasUpdate', $marca->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="inputName">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$marca->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection