<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\admin\AdminSeeder;
use Database\Seeders\frontend\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
        ]);

    }
}
