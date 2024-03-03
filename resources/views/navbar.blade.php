<style>
    @media screen and (min-width) {
        .navbar .container-fluid {
            flex-direction: column;
        }
    }

</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand"href="{{ route('home') }}" id="titulo">Hola {{ auth()->user()->name }}!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarioList') }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('marcaList') }}">Marcas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="false">Disabled</a>
                </li>
            </ul>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button class="btn btn-outline-danger" type="submit">Salir</button>
            </form>
        </div>
    </div>
</nav>