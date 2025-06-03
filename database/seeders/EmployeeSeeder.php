<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company1 = Company::where('name', 'TechCorp')->first();
        $company2 = Company::where('name', 'Web Solutions')->first();

        Employee::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'company_id' => $company1->id,
            'email' => 'john.doe@techcorp.com',
            'phone' => '123-456-7890',
        ]);

        Employee::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'company_id' => $company2->id,
            'email' => 'jane.smith@websolutions.com',
            'phone' => '987-654-3210',
        ]);
    }
}
