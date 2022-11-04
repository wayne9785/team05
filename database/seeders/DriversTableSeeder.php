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
    public function genrateRandomString($length = 10){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;                
    }
    public function generateRandomName() {
        $first_name = $this->genrateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->genrateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomcountryofbirth() {
        $positions = ['德國', '加拿大', '芬蘭', '西班牙', '法國', '中國', '丹麥', '瑞士', '澳洲','比利時','墨西哥','摩納哥','英國','日本'];
        return $positions[rand(0, count($positions)-1)];

    }
    public function run()
    {
        for ($i=0; $i<30; $i++)
        {
            $name = $this->generateRandomName();
            $countryofbirth = $this->generateRandomcountryofbirth();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $birthday = Carbon::now()->subYears(rand(48, 60))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
                DB::table('drivers')->insert([
                'name' => $name,
                'tid' => rand(1, 10),
                'birthday' => $birthday,
                'countryofbirth' => $countryofbirth,
                'number' => rand(1, 77),
                'frequency' => rand(17, 353),
                'integral' => rand(0, 10)/10 * 4335,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
