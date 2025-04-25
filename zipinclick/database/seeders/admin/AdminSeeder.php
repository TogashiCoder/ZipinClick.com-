<?php

namespace Database\Seeders\admin;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = 'Super Admin';
        $admin->email = 'admin@support.com';
        $admin->password = bcrypt('password');
        $admin->save();
    }
}
