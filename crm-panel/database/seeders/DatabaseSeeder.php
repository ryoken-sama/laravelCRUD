<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call admin seeder
        $this->call(AdminUserSeeder::class);
        $this->call([
                CompanySeeder::class,
                EmployeeSeeder::class
            ]);
    }
}
