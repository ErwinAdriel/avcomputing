@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item"><a href="/list">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar</li>
        </ol>
    </nav>
    <div>
        <form method="POST" action="{{ route('create') }}">
            @csrf
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputClave">Clave</label>
                <input type="password" class="form-control" id="password" name="password" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputPhone">Telefono</label>
                <input type="tel" class="form-control" id="phone" name="phone" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputAdmin">¿Es administrador?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="admin" id="true">
                    <label class="form-check-label" for="true">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="admin" id="false" checked>
                    <label class="form-check-label" for="false">
                        No
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection