<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FleetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomcountry() {
        $country = ['義大利',  '法國', '美國', '德國', '奧地利','英國','瑞士'];
        return $country[rand(0, count($country)-1)];

    }
    public function generateRandomlocation() {
        $location = ['義大利瑪拉內羅',  '義大利法恩札', '美國北卡羅萊納州坎納波里利斯', '英國北安普敦郡', '英國薩里郡沃金','英國銀石','瑞士蘇黎世州欣維爾','英國牛津郡恩斯頓','英國牛津郡格羅夫','英國白金漢郡米爾頓凱恩斯'];
        return $location[rand(0, count($location)-1)];

    }
    public function run()
    {
        for ($i=0; $i<10; $i++) {
            $name = $this->generateRandomName();
            $country = $this->generateRandomcountry();
            $location = $this->generateRandomlocation();
            
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('fleets')->insert([
                'name' => $name,
                'country' => $country,
                'location' => $location,
                
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
