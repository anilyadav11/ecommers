<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\franchise;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class franchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        franchise::create([
            'name' => 'Franchise 1',
            'email' => 'franchise1@gmail.com',
            'password' => Hash::make('12345678'),
            'address' => 'Address 1',
            'phone' => '1234567890',
            'franchise_id' => Hash::make('12345678'),
            'postal_code' => '123456',
            'country' => 'Country 1',
            'state' => 'State 1',
            'city' => 'City 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
