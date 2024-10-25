<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Intelli',
            'last_name' => 'vectra',
            'email' => 'admin@intellivectra.com',
            'mobile' => '7004857557',
            'password' => bcrypt('12345678')
        ]);
    }
}
