<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Ali',
             'user_id' => '1859648',
             'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Hashemite',
             'user_id' => '1256333333',
             'password' => Hash::make('password'),
             'role' => 'company',
        ]);
        User::create([
            'name' => 'Alaa',
             'user_id' => '1259874',
             'password' => Hash::make('password'),
             'role' => 'admin',
        ]);
        User::create([
            'name' => 'Hani',
             'user_id' => '156897',
             'password' => Hash::make('password'),
             'role' => 'supervisor',
        ]);
    }
}
