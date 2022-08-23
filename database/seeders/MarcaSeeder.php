<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Marca;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'nombre' => 'Adidas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
