<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cp0 = new Team();
        $cp0->name = "Adrapok's Team";
        $cp0->user_id = 1;
        $cp0->personal_team = 1;
        $cp0->save();

        $cp1 = new Team();
        $cp1->name = "Ventas";
        $cp1->user_id = 1;
        $cp1->personal_team = 0;
        $cp1->save();

        $cp2 = new Team();
        $cp2->name = "Almacen";
        $cp2->user_id = 1;
        $cp2->personal_team = 0;
        $cp2->save();

        $cp3 = new Team();
        $cp3->name = "Compras";
        $cp3->user_id = 1;
        $cp3->personal_team = 0;
        $cp3->save();

        $cp4 = new Team();
        $cp4->name = "Representante";
        $cp4->user_id = 1;
        $cp4->personal_team = 0;
        $cp4->save();
    }
}
