<?php

namespace Database\Seeders;

use Database\Seeders\StudentClassesSeeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            StudentClassesSeeder::class,
        ]);
    }
}
