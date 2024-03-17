<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.list', compact('usuarios'));
    }

    public function show($id)
    {
        $usuario = User::find($id);
        return view('perfil.list', compact('usuario'));
    }

    public function update(Request $request, $id){

        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->phone = $request->phone;
        $usuario->save();

        return redirect($id . '/perfil/list')->withSuccess('Los datos han sido actualizado correctamente.');
    }
}
