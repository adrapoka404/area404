<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\Producto;
use Livewire\Component;

class VendedorIndex extends Component
{
 //   public $busqueda = 'impre';
    public $search = '';
    public $paginate = 8;
    public function render()
    {
        return "Ahora es en componente";
        $productos = Producto::where('tienda_id', 1)//cambiar por tienda en sesion
            ->where('estatus', 1)
            ->where('nombre', 'like', "%".$this->search."%")
            ->orderBy('vendido', 'DESC')
            ->paginate($this->paginate);//cambiar por paginacion dinamica
        $search = $this->search;
        $paginate = $this->paginate;
        return view('livewire.vendedor.vendedor-index', compact('productos', 'search', 'paginate'));
    }
}
