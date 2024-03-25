<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::query()
        ->when(request('buscador'), function($query){
            return $query->where('name', 'like', '%' . request('buscador') . '%');
        })
        ->simplePaginate(5);
        //->withQueryString();

        return view('productos.list', compact('productos'));


        /*$buscador = trim($request->get('buscador'));
        $productos = DB::table('productos')
        ->select('id', 'name', 'price', 'destacado', 'id_categoria', 'id_marca', 'description', 'created_at', 'updated_at')
        ->where('name', 'LIKE', '%' . $buscador . '%')
        ->orWhere('description', 'LIKE', '%' . $buscador . '%')
        ->orderBy('name', 'asc')
        ->simplePaginate(5);

        return view('productos.list', compact('productos', 'buscador'));*/
    }

    public function create()
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();

        return view('productos.create', compact('categorias', 'marcas'));
    }

    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->destacado = $request->destacado;
        $producto->id_categoria = $request->id_categoria;
        $producto->id_marca = $request->id_marca;
        $producto->description = $request->description;

        $producto->save();

        return redirect('/productos/list');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $marcas = Marca::all();

        return view('productos.edit', compact('producto', 'categorias', 'marcas'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->destacado = $request->destacado;
        $producto->id_categoria = $request->id_categoria;
        $producto->id_marca = $request->id_marca;
        $producto->description = $request->description;

        $producto->save();

        return redirect('/productos' . '/' .$id . '/edit')->withSuccess('El producto ha sido actualizado correctamente.');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/productos/list');
    }
}
