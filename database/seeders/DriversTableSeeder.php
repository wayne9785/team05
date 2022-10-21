<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'name' => "黃福誠",
            'tid' => 2,
            'number' => 16,
            'frequency' => 1,
            'integral' => 2.3,
            'birthday' => "2002-01-16",
            'countryofbirth' => "印度",          
        ]);
    }
}
