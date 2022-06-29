<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Permissoes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'parceiro']);
        Permission::create(['name' => 'comprador']);
        Permission::create(['name' => 'visitante']);
        Permission::create(['name' => 'operador']);
        Permission::create(['name' => 'gestorUnidade']);
        Permission::create(['name' => 'gestorFinanceiro']);
        Permission::create(['name' => 'rh']);

    }
}
