<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Productos;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\Post;


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
       
         User::factory(100)->create();
         Categoria::factory(100)->create();
         Post::factory(100)->create();
         Productos::factory(100)->create();
         Cliente::factory(100)->create();
         Venta::factory(100)->create()
    }
}
