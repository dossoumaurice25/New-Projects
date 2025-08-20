<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'username' => 'Maurice123',
            'email' => 'dossoujesug@gmail.com',
            'password' => Hash::make('motdepassefort'),
            'first_name' => 'DOSSOU',
            'last_name' => 'Maurice',
            'address' => 'HQ Street',
            'city' => 'Porto-Novo',
            'country' => 'Bénin',
            'phone_number' => '+22947568058',
            'role' => 'admin',
        ]);

        // User
        User::create([
            'username' => 'Rodrigue007',
            'email' => 'hounsarodrigue@gmail.com',
            'password' => Hash::make('motdepasse'),
            'first_name' => 'HOUNSA',
            'last_name' => 'Rodrigue',
            'address' => 'Porto-Novo',
            'city' => 'Porto-Novo',
            'country' => 'Bénin',
            'phone_number' => '+22967822464',
            'role' => 'user',
        ]);
    }
}
