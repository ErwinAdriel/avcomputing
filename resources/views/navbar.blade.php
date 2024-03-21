<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4 d-none d-sm-inline">SISTEMA DE GESTIÓN</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{ route('usuarioList') }}" class="nav-link align-middle px-0">
                    <i class="bi bi-people"></i>
                    <span class="ms-1 d-none d-sm-inline">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0">
                    <i class="bi bi-shop"></i>
                    <span class="ms-1 d-none d-sm-inline">Productos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('marcaList') }}" class="nav-link align-middle px-0">
                    <i class="bi bi-droplet-half"></i>
                    <span class="ms-1 d-none d-sm-inline">Marcas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categoriaList') }}" class="nav-link align-middle px-0">
                    <i class="bi bi-list-check"></i>
                    <span class="ms-1 d-none d-sm-inline">Categorias</span>
                </a>
            </li>
        </ul>
        <hr />
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <i style="font-size:30px;" class="bi bi-person-circle"></i>
                <span class="d-none d-sm-inline mx-1">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="{{ route('perfilView', auth()->user()->id) }}">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" type="submit">Salir</button>
                </form>
            </ul>
        </div>
    </div>
</div>