@extends('app')
@section('content')
<h1>USUARIO LOGUEADO</h1>
<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-outline-danger btn-lg px-5" type="submit">Cerrar sesion</button>
</form>
@endsection