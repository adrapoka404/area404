<?php

namespace App\Http\Controllers\Orden;

use App\Http\Controllers\Controller;
use App\Models\Order;

use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orden = session('orden');

        return view('ordenes.index', compact('orden'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Confirmar orden";
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
    public function edit($id)
    {
        $orden = new Order();
        $orden->quitar($id);
        if(session()->has('orden'))
            return redirect()->route('ordenes.index')->with('info', __('Se ha elemininado el elemento del carrito'));
        return redirect()->route('vendedores.index')->with('info', __('El carrito a quedado vacio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function confirma()
    {
        $orden = new Order();
        $orden->confirma();

        if(!session()->has('productos')) 
            return redirect('vendedores')->with('info', __('Exito! Felicidades por esta venta. te amamos mil.'));

        return redirect('ordenes.index')->with('info', __('Algo anda mal, no se pudo completar a orden'));

    }
}

