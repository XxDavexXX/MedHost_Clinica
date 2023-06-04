<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'nombres' => "usuario$i",
                'apellido_paterno' => "usuario$i",
                'apellido_materno' => "usuario$i",
                'dni' => "usuario$i",
                'tipo_user' => "usuario$i",
                'email' => "email$i@test.com",
                'password' => bcrypt("pass$i"),
            ]);
        }
    }
}
