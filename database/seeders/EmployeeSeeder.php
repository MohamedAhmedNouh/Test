<?php

namespace Database\Seeders;

use App\Models\Employee;
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
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Employee::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'Phone' => $faker->phoneNumber,
                'department' => $faker->companySuffix
            ]);

        }
    }
}
