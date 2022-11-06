<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'no_telp' => '0987654321',
            'level' => '',
            'foto' => '',
        ]);
    }
}
