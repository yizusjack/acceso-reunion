<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jose Luis Barrera Velazquez',
            'email' => 'jose.barrera2895@alumnos.udg.mx',
            'password' => 'password',
            'is_admin' => true,
        ]);
    }
}
