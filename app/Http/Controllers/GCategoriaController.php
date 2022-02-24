<?php

namespace App\Http\Controllers;

use App\Models\CategoriasGasto;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;

class GCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gcategorias = CategoriasGasto::paginate(10);

        return view('a404.gcategorias.index', compact('gcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('a404.gcategorias.create');
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
            "nombre" => "required|min:4|max:50",
        ]);

        CategoriasGasto::create($request->all());

        return redirect()->route('categorias.gastos.index')->with('info', __('Se creó con éxito la categoría para gastos'));
        
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
    public function edit(CategoriasGasto $gcategoria)
    {
        return view('a404.gcategorias.edit', compact('gcategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriasGasto $gcategoria)
    {
        $request->validate([
            "nombre" => "required|min:4|max:50",
        ]);

        $gcategoria->update($request->all());

        return redirect()->route('categorias.gastos.index')->with('info', __('Se edit+o con éxito la categoría para gastos'));
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
