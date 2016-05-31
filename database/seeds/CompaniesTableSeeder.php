<?php

use Illuminate\Database\Seeder;
use App\companie;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        companie::create([
            'name' => 'Zadkine',
            'address' => 'Posthumalaan 120',
            'zipcode' => '1234AB',
            'city' => 'Rotterdam'
        ]);
    }
}
