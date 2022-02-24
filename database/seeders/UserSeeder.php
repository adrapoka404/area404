<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yo = new User();

        $yo->name               = "Adrapok";
        $yo->email              = "adrapok@gmail.com";
        $yo->password           = '$2y$10$kXx4ddGZ.YmmdOdnR95Ex.A03Rvh/U8wAxUmbIjGsPJC4QJJm07Qy';
        $yo->current_team_id    = 1;
    }
}
