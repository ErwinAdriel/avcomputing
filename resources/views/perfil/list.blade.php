@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
    </nav>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div>
        <form method="POST" action="{{ route('userUpdate', $usuario->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="inputId">ID</label>
                <input type="number" class="form-control" value="{{ $usuario->id }}" id="id" name="id" disabled>
            </div>
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" value="{{ $usuario->name }}" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" value="{{ $usuario->email }}" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="inputPhone">Telefono</label>
                <input type="tel" class="form-control" value="{{ $usuario->phone }}" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="inputAdmin">¿Es administrador?</label>
                @if($usuario->admin == true)
                <input type="text" class="form-control" value="Si" id="admin" name="admin" disabled>
                @else
                <input type="text" class="form-control" value="No" id="admin" name="admin" disabled>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
            <a class="btn btn-primary mt-3" href="" role="button">Cambiar clave</a>
        </form>
    </div>
</div>

@endsection