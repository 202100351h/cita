<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jhojan',
            'email' => 'Jhojan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            
            'cedula' => '71809603',
            'address' => 'Av. Geometry Dash ',
            'phone' => '976242061',
            'role' => 'admin',
        ]);
        User::factory()
            ->count(50)
            ->create();
    }
}
