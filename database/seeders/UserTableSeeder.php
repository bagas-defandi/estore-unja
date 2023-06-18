<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Bagas Defandi',
                'email' => 'bagasdefandi12@gmail.com',
                'password' => Hash::make('bagas123')
            ]
        );
        User::create(
            [
                'name' => 'Bimo Ariansah',
                'email' => 'bimoariansah@gmail.com',
                'password' => Hash::make('bimo123')
            ]
        );
    }
}
