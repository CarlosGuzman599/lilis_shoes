<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'name' => 'Price Shoes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
