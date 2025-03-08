<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'anil',
            'email' => 'anil@gmail.com',
            'password' => Hash::make('1234567890'),
            'phone' => '1234567890',
            'address' => 'india',
            'city' => 'india',
            'state' => 'india',
            'country' => 'india',
            'postal_code' => '44600',
        ]);
    }
}
