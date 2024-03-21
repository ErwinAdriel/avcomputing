@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/layout">Home</a></li>
            <li class="breadcrumb-item"><a href="/productos/list">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar</li>
        </ol>
    </nav>
    <div class="form-add">
        <form method="POST" action="{{route('createProducto')}}">
            @csrf
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <label for="inputPrecio">Precio</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="inputName">¿Destacado?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="destacado" id="true">
                    <label class="form-check-label" for="true">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="destacado" id="false" checked>
                    <label class="form-check-label" for="false">
                        No
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName">Categoria</label>
                <select class="form-control" id="id_categoria" name="id_categoria" required>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputName">Marca</label>
                <select class="form-control" id="id_marca" name="id_marca" required>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="inputName">Descripcion</label>
            <div class="input-group">
                <textarea class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection