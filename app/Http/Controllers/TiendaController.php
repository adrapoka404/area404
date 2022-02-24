<?php

namespace App\Http\Controllers;

use App\Models\CategoriasTienda;
use App\Models\Tienda;
use App\Models\User;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = Tienda::paginate(10);   
        return view('tiendas.index', compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        $categorias = CategoriasTienda::where('estatus', 1)->get();

        return view('tiendas.create', compact('usuarios', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'descripcion'   => 'required|min:50|max:250',
            'categoria_id'  => 'required',
            'user_id'       => 'required', 
        ]);
        
        Tienda::create($request->all());

        return redirect()->route('tiendas.index')->with('info', __('Se creó con éxito la tienda'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(Tienda $tienda)
    {
        return view('tiendas.edit', compact('tienda', 'categorias', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(Tienda $tienda)
    {
        $usuarios = User::all();
        $categorias = CategoriasTienda::where('estatus', 1)->get();

        return view('tiendas.edit', compact('tienda', 'usuarios','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tienda $tienda)
    {
        $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'descripcion'   => 'required|min:50|max:250',
            'categoria_id'  => 'required',
            'user_id'       => 'required', 
        ]);

        $tienda->update($request->all());

        return redirect()->route('tiendas.index')->with('info', __('Se actualizó con éxito la tienda'));
    }

    
}
