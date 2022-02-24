<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Orden extends Model
{
    use HasFactory;

    public function crear($request)
    {
        if (!session()->has('productos.' . $request->producto))
            session()->put('productos.' . $request->producto, $request->cantidad);

        $this->reordenar();
    }

    public function quitar($id)
    {
        session()->forget('productos.' . $id);
        $this->reordenar();
    }

    private function reordenar()
    {
        session()->forget('orden');
        if (session()->has('productos') and count(session()->get('productos'))) {
            foreach (session('productos') as $id => $cant) {
                $product    = Producto::find($id);
                $sbt        = $product->precio * $cant;
                $sbtf       = $this->format_price($sbt);

                session()->put('orden.detalle.'         . $id . '.nombre', $product->nombre);
                session()->put('orden.detalle.'         . $id . '.precio', $product->precio);
                session()->increment('orden.detalle.'   . $id . '.cantidad', $incrementBy = $cant);
                session()->put('orden.detalle.'         . $id . '.st', $sbtf);

                session()->increment('orden.total', $incrementBy = $sbt);
                $total = session()->all()['orden']['total'];

                session()->put('orden.ftotal', $this->format_price($total));

                session()->put('orden.ultimo',  $product->nombre . '( ' . $cant . ' x '  . $product->precio . ')');
            }
            if (!session()->has('folio'))
                session()->put('orden.folio', time());
        }
    }

    private function format_price($cant)
    {
        return "$ " .  number_format($cant, 2, ".", "'");
    }
}
