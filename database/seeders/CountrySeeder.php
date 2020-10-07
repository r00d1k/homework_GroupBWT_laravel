<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory()->hasCompanies(2)->create(['name' => 'Канада']);
        Country::factory(9)->hasCompanies(2)->create();
    }
}
