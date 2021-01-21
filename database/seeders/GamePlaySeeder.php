<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gameplay;
use App\Models\Game;
use App\Models\Player;

class GamePlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //3835 days of gaming
        //1500 game play pe-r day

        for($i = 0; $i < 3835; $i++){
            for($j = 0; $j < 1500; $j++){
                $gameitem = Game::all()->random(1)->first();
                $playeritem = Player::all()->random(1)->first();
                $days_to_add = rand(25, 250);
                $date = date_create($gameitem->date);
                date_add($date, date_interval_create_from_date_string($days_to_add." days"));
                Gameplay::create([
                    'player_id' => $gameitem->id,
                    'game_id' => $playeritem->id,
                    'date_played' => $date
                ]);
            }
        }
    }
}
