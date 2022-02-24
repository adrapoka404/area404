<?php

namespace Database\Seeders;

use App\Models\Tienda;
use Illuminate\Database\Seeder;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cp0 = new Tienda();
        $cp0->nombre = "Área 404";
        $cp0->slug = "area-404";
        $cp0->descripcion = "Ciber Área 404, impresiones, copias, servicios de tecnología.";
        $cp0->categoria_id = 3;
        $cp0->user_id = 1;
        $cp0->estatus = 1;
        $cp0->save();

        $cp1 = new Tienda();
        $cp1->nombre = "Adraxia";
        $cp1->slug = "adraxia";
        $cp1->descripcion = "Este es un sitio de prueba para la creación de Adraxia";
        $cp1->categoria_id = 3;
        $cp1->user_id = 1;
        $cp1->estatus = 1;
        $cp1->save();
    }
}
