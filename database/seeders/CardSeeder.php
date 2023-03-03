<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $card = new Card();
            $card->name = $faker->words(2, true);
            $card->mana = $faker->randomNumber(2, false);
            $card->thumb = "https://picsum.photos/id/" . $faker->numberBetween(1, 50) . "/200/300";
            $card->edition = $faker->randomDigitNotNull();
            $card->effect = $faker->sentences(2);
            $card->description = $faker->paragraph();
            $card->str = $faker->randomDigitNotNull();
            $card->constitution = $faker->randomDigitNotNull();
            $card->type = $faker->randomElement(['artefatto', 'creatura', 'incantesimo', 'istantaneo', 'terra', 'piano', 'intrigo', 'stregoneria']);;

            $card->save();
        }
    }
}
