<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.list', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $marca = new Marca();

        $marca->name = $request->name;

        $marca->save();

        return redirect('/marcas/list');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);

        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $marca = Marca::findOrFail($id);

        $marca->name = $request->name;

        $marca->save();

        return redirect('/marcas' . '/' .$id . '/edit')->withSuccess('La marca ha sido actualizada correctamente.');
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return redirect('/marcas/list');
    }
}
