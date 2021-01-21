<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use Illuminate\Support\Facades\Hash;


class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Player::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('secret');

        Player::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' =>  $password
        ]);
        
        for($i=0; $i<1000; $i++){
            Player::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => $password,
            ]);
        }
    }
}