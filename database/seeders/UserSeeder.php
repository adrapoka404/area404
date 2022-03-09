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
        $yo->password           = '$2y$10$6cOp7k1zWC1jbG9pqss.HukMRwNYq8RNGv/pyL7nBjjDCYlQaHZ.y';//4dr4p0k4
        $yo->current_team_id    = 1;
    }
}
