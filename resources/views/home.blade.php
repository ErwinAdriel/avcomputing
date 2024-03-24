@extends('layout')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="row justify-content-between">
        <div class="col-sm-4">
            <div class="alert alert-danger">
                <a href="{{ route('usuarioList') }}" class="text-decoration-none text-reset hover">
                    <div class="d-flex align-items-center">
                        <div>
                            <i style="font-size:65px;" class="bi bi-people px-2"></i>
                        </div>
                        <div>
                            <h1 class="display-6">Usuarios</h1>
                            <h2>{{ count($usuarios) }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="alert alert-primary">
                <a href="{{ route('productoList') }}" class="text-decoration-none text-reset hover">
                    <div class="d-flex align-items-center">
                        <div>
                            <i style="font-size:65px;" class="bi bi-cart px-2"></i>
                        </div>
                        <div>
                            <h1 class="display-6">Productos</h1>
                            <h2>{{ count($productos) }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="alert alert-success">
                <a href="{{ route('marcaList') }}" class="text-decoration-none text-reset hover">
                    <div class="d-flex align-items-center">
                        <div>
                            <i style="font-size:65px;" class="bi bi-droplet-half px-2"></i>
                        </div>
                        <div>
                            <h1 class="display-6">Marcas</h1>
                            <h2>{{ count($marcas) }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-sm-4">
            <div class="alert alert-info">
                <a href="{{ route('categoriaList') }}" class="text-decoration-none text-reset hover">
                    <div class="d-flex align-items-center">
                        <div>
                            <i style="font-size:65px;" class="bi bi-list-check px-2 mt-n1"></i>
                        </div>
                        <div>
                            <h1 class="display-6">Categorias</h1>
                            <h2>{{ count($categorias) }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection