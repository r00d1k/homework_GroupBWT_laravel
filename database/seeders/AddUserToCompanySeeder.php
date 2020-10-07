<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class AddUserToCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $companies = Company::all();
        $companies->each(function ($company) use ($users) {
            /**
             * @var Company $company
             */
            $company->users()->attach($users->random(rand(1,10)));
        });
    }
}
