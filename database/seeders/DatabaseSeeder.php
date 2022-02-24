<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TCategoriasSeeder::class);
        $this->call(PCategoriasSeeder::class);
        $this->call(GCategoriasSeeder::class);
        $this->call(TiendasSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
