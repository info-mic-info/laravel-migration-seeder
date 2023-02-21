<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<=10; $i++){

            $Single_Train= new Train();
            $Single_Train->Azienda = $faker->word();
            $Single_Train->Stazione_di_partenza = $faker->word();
            $Single_Train->Stazione_di_arrivo = $faker->word();
            $Single_Train->Orario_di_partenza = $faker->time();
            $Single_Train->Orario_di_arrivo = $faker->time();
            $Single_Train->Codice_Treno = $faker->word();
            $Single_Train->Numero_Carrozze = $faker->numberBetween(1, 10);
            $Single_Train->In_orario = $faker->randomElement([true,false]);
            $Single_Train->Cancellato= $faker->randomElement([true,false]);
            $Single_Train->save();
       
        }
    }
}
