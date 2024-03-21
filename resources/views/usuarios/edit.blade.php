@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item"><a href="/usuarios/list">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <h5>EDITANDO USUARIO</h5>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div>
        <form method="POST" action="{{ route('usuarioUpdate', $usuario->id) }}">
            @method('PUT')
            @csrf
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
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="admin" id="true"
                    @if($usuario->admin == true)
                        checked
                    @endif>
                    <label class="form-check-label" for="true">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="admin" id="false"
                    @if($usuario->admin == false)
                        checked
                    @endif>
                    <label class="form-check-label" for="false">
                        No
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
            <a class="btn btn-primary mt-3" href="/usuarios/list" role="button">Volver atras</a>
        </form>
    </div>
</div>

@endsection