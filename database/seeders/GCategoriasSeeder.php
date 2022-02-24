<?php

namespace Database\Seeders;

use App\Models\CategoriasGasto;
use Illuminate\Database\Seeder;

class GCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cp0 = new CategoriasGasto();
        $cp0->nombre = "Administrativo";
        $cp0->estatus = 1;
        $cp0->save();

        $cp1 = new CategoriasGasto();
        $cp1->nombre = "Financiero";
        $cp1->estatus = 1;
        $cp1->save();

        $cp2 = new CategoriasGasto();
        $cp2->nombre = "Ventas";
        $cp2->estatus = 1;
        $cp2->save();

        $cp3 = new CategoriasGasto();
        $cp3->nombre = "Personal";
        $cp3->estatus = 1;
        $cp3->save();

        $cp4 = new CategoriasGasto();
        $cp4->nombre = "Producción";
        $cp4->estatus = 1;
        $cp4->save();
    }
}
