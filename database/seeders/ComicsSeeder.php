<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(faker $faker): void
    {

        
        for ($i=0 ; $i < 50; $i++ ) { 

            $nuovoFumetto = new Comic();
            $nuovoFumetto->title = $faker->sentence(3);
            $nuovoFumetto->description = $faker->paragraph;
            $nuovoFumetto->thumb = $faker->imageUrl(200, 300, 'comics', true, 'Faker');
            $nuovoFumetto->price = $faker->randomFloat(2, 1, 100);
            $nuovoFumetto->series = $faker->word;
            $nuovoFumetto->sale_date = $faker->date();
            $nuovoFumetto->type = $faker->word;
            $nuovoFumetto->artists = json_encode($faker->words(3));
            $nuovoFumetto->writers = json_encode($faker->words(3));

            $nuovoFumetto->save();

           /*  Comic::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'thumb' => $faker->imageUrl(200, 300, 'comics', true, 'Faker'),
                'price' => $faker->randomFloat(2, 1, 100),
                'series' => $faker->word,
                'sale_date' => $faker->date(),
                'type' => $faker->word,
                'artists' => json_encode($faker->words(3)),
                'writers' => json_encode($faker->words(3)),
            ]); */
        };
    }
}
