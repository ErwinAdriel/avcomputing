@extends('app')
@section('content')
<section class="">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="text-bg-dark">
                    <div class="card-body px-5 py-2 text-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Sistema de gestion</h2>
                                <p class="text-white-50 mb-5">Ingresar usuario y clave!</p>
                                @if(session('success'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-dark text-white"><i class="bi bi-envelope"></i></span>
                                        <input name="email" type="text" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <div class="form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-dark text-white"><i class="bi bi-key-fill"></i></span>
                                        <input name="password" type="password" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">¿Olvidaste la contraseña?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection