<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Vendedor extends Component
{
    public $search='';
    public $sort = 'vendido';
    public $dir = 'DESC';
    public $patern = 0;
    public $paginate = 8;
    public function render()
    {
       
      $productos = null;
        $productos = Producto::where('tienda_id', 1)//Mofiicar por tienda en sesion
            ->where('estatus', 1)
           // ->where('patern_id', $this->patern)//Este se modifica por el patern
            ->where('nombre', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->dir)
            ->get();    
            //->paginate($this->paginate);


        return view('livewire.vendedor', compact('productos'));
    }
}
