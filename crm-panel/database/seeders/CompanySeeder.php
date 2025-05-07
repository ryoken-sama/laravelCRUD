<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'TechCorp',
            'email' => 'techcorp@example.com',
            'logo' => 'techcorp_logo.png',  // Add a default logo or adjust the logic accordingly
            'website' => 'https://techcorp.com',
        ]);

        Company::create([
            'name' => 'Web Solutions',
            'email' => 'websolutions@example.com',
            'logo' => 'websolutions_logo.png',
            'website' => 'https://websolutions.com',
        ]);
    }
}
