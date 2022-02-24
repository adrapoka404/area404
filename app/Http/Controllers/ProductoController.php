<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CategoriasProducto;
use App\Models\Tienda;
use App\Models\User;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productos = Producto::orderBy('nombre')->paginate(10);

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriasProducto::select('id', 'nombre')
                        ->where('estatus', 1)
                        ->orderBy('nombre', 'asc')
                        ->get();
        $usuarios   = User::all();
        $tiendas    = Tienda::all();
        $productos  = Producto::select('id', 'nombre')
                        ->where('estatus', 1)
                        ->where('patern_id', 0)
                        ->get();

        return view('productos.create', compact('categorias', 'usuarios', 'tiendas', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $producto)
    {
        
        $producto->validate([
            'nombre'        => 'required|min:5|max:100',
            'slug'          => '',
            'descripcion'   => 'required|min:20|max:250',
            'precio'        => 'required',
            'cantidad'      => 'required|numeric',
            'minimo'        => 'required|numeric',
            'estatus'       => 'required',
            'categoria_id'  => 'required|numeric',
            'tienda_id'     => 'required|numeric',
            'imagen'        => 'required',
        ]);

        $producto = Producto::create($producto->all());

        $producto->update(['slug' => Str::slug($producto->nombre, '-')]);

        return redirect()->route('productos.index')->with('info', __('Producto creado con éxito'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias     = CategoriasProducto::select('id', 'nombre')
                            ->where('estatus', 1)
                            ->get();
        $usuarios       = User::all();
        $tiendas        = Tienda::all();
        $productos      = Producto::select('id', 'nombre')
                            ->where('estatus', 1)
                            ->where('patern_id', 0)
                            ->get();
        return view('productos.edit', compact('producto', 'categorias', 'usuarios', 'tiendas', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'slug'          => '',
            'descripcion'   => 'required|min:20|max:250',
            'precio'        => 'required',
            'cantidad'      => 'required|numeric',
            'minimo'        => 'required|numeric',
            'estatus'       => 'required',
            'categoria_id'  => 'required|numeric',
            'tienda_id'     => 'required|numeric',
            'imagen'        => 'required',
        ]);
        $producto->update($request->all());
        $producto->update(['slug' => Str::slug($producto->nombre, '-')]);

        return redirect()->route('productos.index')->with('info', __('Producto editadó con éxito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
