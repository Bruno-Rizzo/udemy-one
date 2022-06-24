<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@email.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 1
        ]);
    }
}
