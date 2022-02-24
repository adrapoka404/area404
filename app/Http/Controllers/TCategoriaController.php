<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriasTienda;

class TCategoriaController extends Controller
{
    
    public function index()
    {
        $tcategorias = CategoriasTienda::paginate(10);
        
        return view('a404.tcategorias.index', compact('tcategorias'));
    }

    public function create()
    {
        return view('a404.tcategorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'descripcion'   => 'required|min:50|max:500',
        ]);

      CategoriasTienda::create($request->all());
      
      return redirect()->route('categorias.tiendas.index')->with('info', __('Se creó con éxito la categoría para tiendas'));
    }

    public function edit(CategoriasTienda $tcategoria)
    {
        return view('a404.tcategorias.edit', compact('tcategoria'));
    }

    public function update(Request $request, CategoriasTienda $tcategoria)
    {
        $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'descripcion'   => 'required|min:50|max:500',
        ]);

        $tcategoria->update($request->all());
      
      return redirect()->route('categorias.tiendas.index')->with('info', __('Se actualizó con éxito la categoría para tiendas'));
    }
}
