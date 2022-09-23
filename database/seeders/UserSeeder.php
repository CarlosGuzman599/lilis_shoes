<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'name' => 'root'//1
        ]);

        Cargo::create([
            'name' => 'admin'//2
        ]);

        Cargo::create([
            'name' => 'client'//3
        ]);

        Cargo::create([
            'name' => 'user'//4
        ]);

        User::create([
            'name' => 'Carlos',
            'email' => 'carlilloz.599@gmail.com',
            'phone' => '3411785798',
            'cargo_id' => 2,
            'password' => Hash::make('carlos@599'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Lili',
            'email' => 'lili@gmail.com',
            'phone' => '3411273602',
            'cargo_id' => 1,
            'password' => Hash::make('azulfelipe123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
