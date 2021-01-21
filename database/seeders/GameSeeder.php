<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Call of duty', 'Mortal Kombat', 'FIFA', 'Just Cause', 'Apex Legend'
        ];
        $version = [
            '2010', '2011','2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020'
        ];

        for($i = 0; $i < count($name); $i++){
            for($j = 0; $j < count($version); $j++){
                $year = $version[$j];
                $day =  rand(1,27);
                $month = rand(1,12);
                $dateString = $year."-".$month."-".$day;
                $date = date_create($dateString);
            
                Game::create([
                    'name' => $name[$i],
                    'version' => $version[$j],
                    'date' => date_format($date,"Y/m/d")
                ]);
            }
        }
    }
}
