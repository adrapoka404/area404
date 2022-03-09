<?php

namespace App\Http\Controllers\Vededores;

use App\Http\Controllers\Controller;
use App\Models\CategoriasGasto;
use App\Models\Gasto;
use App\Models\Order;
use App\Models\Producto;
use App\Models\Team;
use Illuminate\Http\Request;

//eliminar
use Illuminate\Support\Str;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendedores.index');
        
    }

    public function vgastos()
    {
        $gcategorias = CategoriasGasto::orderBy('nombre', 'asc')
            ->where('estatus', 1)
            ->get();
        return view('vendedores.gasto', compact('gcategorias'));
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
        
        $orden =  new Order();
        $orden->crear($request);

        return redirect()->route('vendedores.index')->with('info', __('Se agrego ' . session('orden.ultimo'). ' a la orden'));
    }

    public function vgstore(Request $request){
        $request->validate([
            "nombre"        => "required|min:4|max:50",
            "descripcion"   => "required|min:50|max:160",
            "precio"        => "required|numeric",
            "categoria_id"  => "required"
        ]);

        Gasto::create($request->all());

        return redirect('dashboard')->with('info', __('Gasto creado con éxito, gracias por tu aportación. El administrador será notificado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "amo a ve el car";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
