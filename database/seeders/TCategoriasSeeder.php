<?php

namespace Database\Seeders;

use App\Models\CategoriasTienda;
use Illuminate\Database\Seeder;

class TCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ct = new CategoriasTienda();
            $ct->nombre         = "Industria";
            $ct->slug           = "industria";
            $ct->descripcion    = "Bienes y servicios sacados a la industria a partir de su extracción y producción";
            $ct->estatus        = 0;
            $ct->save();   
        
            $ct2 = new CategoriasTienda();
            $ct2->nombre         = "Servicios";
            $ct2->slug           = "servicios";
            $ct2->descripcion    = "Estos servicios comprenden los de: Capital humano, Medios internacionales, Transportes, Asesoramiento, Enseñanza y Servicios sanitarios";
            $ct2->estatus        = 0;
            $ct2->save();

            $ct3 = new CategoriasTienda();
            $ct3->nombre         = "Comercio";
            $ct3->slug           = "comercio";
            $ct3->descripcion    = "Esta categoría representa a los vendedores de bienes y servicios que representan a los intermediarios entre mayoristas y minoristas";
            $ct3->estatus        = 1;
            $ct3->save();
    }
}
