<?php

namespace Database\Seeders\frontend;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'omar',
            'email' => 'omar@gmail.com',
            'password' => bcrypt('omar1234'),

     ]);
}}
