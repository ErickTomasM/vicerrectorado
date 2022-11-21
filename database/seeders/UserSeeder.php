<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Erick Tomas',
            'email' => '1222ericktomas@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Tomas',
            'email' => '1222tomas@gmail.com',
            'password' => bcrypt('654321')
        ])->assignRole('Facultad');

        User::create([
            'name' => 'Erick',
            'email' => '1222erick@gmail.com',
            'password' => bcrypt('8656979')
        ])->assignRole('Carrera');

        User::factory(99)->create();
    }
}
