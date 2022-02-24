<?php

namespace App\Http\Controllers;

use App\Models\CategoriasProducto;
use App\Models\r;
use Illuminate\Http\Request;

class PCategoriaController extends Controller
{
    
    public function index()
    {
        $pcategorias = CategoriasProducto::paginate(10);

        return view('a404.pcategorias.index', compact('pcategorias'));
    }

    public function create()
    {
        $categorias = CategoriasProducto::select('id', 'nombre')->where('estatus', 1)->get();
        return view('a404.pcategorias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|min:4|max:100',
            'descripcion'   => 'required|min:50|max:150',
        ]);

        CategoriasProducto::create($request->all());
        return redirect()->route('categorias.productos.index')->with('info', __('Se creó con éxito la categoría para productos'));
    }

    public function edit(CategoriasProducto $pcategoria)
    {
        $categorias = CategoriasProducto::select('id', 'nombre')->where('estatus', 1)->get();
        
        return view('a404.pcategorias.edit', compact('pcategoria', 'categorias'));
    }

    public function update(Request $request, $cproducto)
    {
        $cproducto = CategoriasProducto::find($cproducto);
        $request->validate([
            'nombre'        => 'required|min:4|max:100',
            'descripcion'   => 'required|min:50|max:150',
        ]);


        $cproducto->update($request->all());
        return redirect()->route('categorias.productos.index')->with('info', __('Se actualizó con éxito la categoría para productos'));
    }
}
