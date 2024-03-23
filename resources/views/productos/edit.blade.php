@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/productos/list">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <h5>EDITANDO PRODUCTO</h5>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div>
        <form method="POST" action="{{ route('productoUpdate', $producto->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $producto->name }}">
            </div>
            <label for="inputPrecio">Precio</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" id="price" name="price" value="{{ $producto->price }}">
            </div>
            <div class="form-group">
                <label for="inputName">¿Destacado?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="destacado" id="true"
                    @if($producto->destacado == true)
                        checked
                    @endif
                    >
                    <label class="form-check-label" for="true">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="destacado" id="false"
                    @if($producto->destacado == false)
                        checked
                    @endif
                    >
                    <label class="form-check-label" for="false">
                        No
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName">Categoria</label>
                <select class="form-control" id="id_categoria" name="id_categoria" required>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                    @if($categoria->id === $producto->id_categoria)
                        selected
                    @endif
                    >{{ $categoria->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputName">Marca</label>
                <select class="form-control" id="id_marca" name="id_marca" required>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}"
                    @if($marca->id === $producto->id_marca)
                        selected
                    @endif
                    >{{ $marca->name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="inputName">Descripcion</label>
            <div class="input-group">
                <textarea class="form-control" name="description" >{{ $producto->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
            <a class="btn btn-primary mt-3" href="/productos/list" role="button">Volver atras</a>
        </form>
    </div>
</div>

@endsection