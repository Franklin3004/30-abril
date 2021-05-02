<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'names_companies'=> 'BIMBO',
            'descriptions_companies' =>'Compañia de postres',
            'nits_companies'=>'3001231234-4',
            'phones_companies'=>'5551234',
        ]);

        DB::table('companies')->insert([
            'names_companies'=> 'NIKE',
            'descriptions_companies' =>'Compañia de Ropa',
            'nits_companies'=>'10034444444-4',
            'phones_companies'=>'56434633',
        ]);
        DB::table('companies')->insert([
            'names_companies'=> 'MC DONALDS',
            'descriptions_companies' =>'Compañia de Comida',
            'nits_companies'=>'1003555555-4',
            'phones_companies'=>'56658997',
        ]);

    }
}
