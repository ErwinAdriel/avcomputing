@extends('app')
@section('content')
@if(session('success'))
<h1>{{session('success')}}</h1>
@endif
<section class="gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5 text-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Sistema de gestion</h2>
                                <p class="text-white-50 mb-5">Ingresar usuario y clave!</p>

                                <div class="form-outline form-white mb-4">
                                    <input name="email" type="text" id="typeEmailX" class="form-control form-control-lg" required autofocus />
                                    <label class="form-label" for="typeEmailX">Usuario</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" required autofocus />
                                    <label class="form-label" for="typePasswordX">Clave</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Olvide la contraseña?</a></p>

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