<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::all()->each(function ($c) {
            $employees = factory(Employee::class, rand(2, 5))->make();

            $employees->each(function ($e) use ($c) {
                $e->company()->associate($c);
                $e->save();
            });
        });
    }
}
