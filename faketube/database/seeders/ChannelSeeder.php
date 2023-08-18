<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel; 
use Faker\Factory as Faker;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Channel::create([
                'ChannelName' => $faker->company, 
                'Description' => $faker->paragraph,
                'SubscribersCount' => $faker->randomNumber(),
                'URL' => $faker->url,
                'Created_At' => now(), 
                'Updated_At' => now(), 
            ]);
        }
    }
}

