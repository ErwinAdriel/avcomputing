<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /* Devuelve una lista de todas las categorias */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.list', compact('categorias'));
    }

    /* Retorna a la vista de creacion de categorias */
    public function create()
    {
        return view('categorias.create');
    }

    /* Almacena una nueva categoria */
    public function store(Request $request)
    {
        $categoria = new Categoria();

        $categoria->name = $request->name;

        $categoria->save();

        return redirect('list');
    }

    /* Retorna a la vista de editar una categoria especifica */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit', compact('categoria'));
    }

    /* Actualiza una categoria especifica */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->name = $request->name;

        $categoria->save();

        return redirect($id . '/edit')->withSuccess('La categoria ha sido actualizada correctamente.');
    }

    /* Elimina una categoria especifica */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('list');
    }
}
