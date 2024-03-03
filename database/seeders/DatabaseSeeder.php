<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Transaccion;
use App\Models\User;
use App\Models\Venta;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(15)->create();
        Cliente::factory(15)->create();
        Categoria::factory(15)->create();
        Producto::factory(15)->create();
        Venta::factory(5)->create();
        Transaccion::factory(5)->create();
        //mandar por partes o varias veces sale error
    }
}
