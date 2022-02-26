<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Darcio Fernandes de Souza Júnior',
            'email' => 'darciofjunior81@gmail.com',
            'password' => bcrypt('Dr178264')
        ]);
    }
}
