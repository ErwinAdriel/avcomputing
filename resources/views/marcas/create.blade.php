@extends('app')
@section('content')
@include('navbar')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="">Marcas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar</li>
        </ol>
    </nav>
    <h5 class="h5Add"></h5>
    <div class="form-add">
        <form method="POST" action="{{route('create')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection