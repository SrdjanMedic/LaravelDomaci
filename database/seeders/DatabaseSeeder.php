<?php

namespace Database\Seeders;
use App\Models\Kamion;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AutomobilSeeder::class);
         //$this->call(RezervacijaSeeder::class);
        User::truncate();
        Kamion::truncate();
        Rezervacija::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $kamion = Kamion::create([
            "regBr"=>"BG-000-AC",
            "opis"=>"Srbija",
            "model"=>"Mercedes",
            "gorivo"=>"Dizel 3.0",
            "godiste"=>"2017",
            "cena"=>"150",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_preuzimanja"=>"2021-07-01",
            "datum_vracanja"=> "2021-01-06",
            "polazna_destinacija"=>"Beograd",
            "krajnja_destinacija"=> "Pariz",
            "brDana"=>"5",
            "model"=>"Mann",
            "kamion_id"=> $kamion->id,
            "user_id"=> $user->id,
        ]);
    }
}
