<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /* Devuelve una lista de todas las categorias */
    public function index(Request $request)
    {
        /*$buscador = trim($request->get('buscador'));
        $categorias = DB::table('categorias')
        ->select('id', 'name', 'created_at', 'updated_at')
        ->where('name', 'LIKE', '%' . $buscador . '%')
        ->orderBy('name', 'asc')
        ->simplePaginate(5);*/

        $categorias = Categoria::query()
        ->when(request('buscador'), function($query){
            return $query->where('name', 'like', '%' . request('buscador') . '%');
        })
        ->simplePaginate(5);
        //->withQueryString();

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

        return redirect('/categorias/list');
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

        return redirect('/categorias' . '/' . $id . '/edit')->withSuccess('La categoria ha sido actualizada correctamente.');
    }

    /* Elimina una categoria especifica */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('/categorias/list');
    }
}
