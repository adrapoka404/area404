<?php

namespace App\Http\Controllers;

use App\Models\CategoriasGasto;
use App\Models\Gasto;
use Illuminate\Http\Request;
use Livewire\Commands\CopyCommand;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::orderBy('id', 'desc')->paginate(10);
        return view('gastos.index', compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gcategorias = CategoriasGasto::orderBy("nombre", "asc")
            ->where('estatus', 1)
            ->get();
        return view('gastos.create', compact('gcategorias'));
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
            'nombre'        => 'required|min:4|max:50',
            'descripcion'   => 'required|min:50|max:160',
            'precio'        => 'required|numeric',
            'categoria_id'  => 'required'
        ]);

        
        Gasto::create($request->all()); 

        return redirect()->route('gastos.index')->with('info', __('Gasto creado con éxito'));

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
    public function edit(Gasto $gasto)
    {
        $gcategorias = CategoriasGasto::orderBy("nombre", "asc")
            ->where('estatus', 1)
            ->get();

        return view('gastos.edit', compact('gasto', 'gcategorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        
        $request->validate([
            'nombre'        => 'required|min:4|max:50',
            'descripcion'   => 'required|min:50|max:160',
            'precio'        => 'required|numeric',
            'categoria_id'  => 'required'
        ]);

        $gasto->update($request->all());
        return redirect()->route('gastos.index')->with('info', __('Gasto editadó con éxito'));
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
