<?php

use App\User;
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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin',
        ]);
        User::create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Employee',
            'phone' => '0897654',
            'address' => 'Taung Gyi'
        ]);
        User::create([
            'name' => 'Ma Ma',
            'email' => 'mama@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Employee',
            'phone' => '0897654',
            'address' => 'MDY'
        ]);
        User::create([
            'name' => 'Kyaw Kyaw',
            'email' => 'kyawkyaw@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Employee',
            'phone' => '0897654',
            'address' => 'YGN'
        ]);
        User::create([
            'name' => 'Green Hackers',
            'email' => 'ghi@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0897654',
            'address' => 'YGN'
        ]);
        User::create([
            'name' => 'KMD',
            'email' => 'kmd@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0897654',
            'address' => 'MDY'
        ]);
    }
}
