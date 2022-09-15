<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamion;

class KamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamion::truncate();
        Kamion::create([
            "godiste"=>"2004",
            "opis"=>"Jednostruke osovine sa reduktorima u glavčinama su u ponudi za poslove gde su poželjne karakteristike poput pouzdanosti pokretanja motora, klirensa vozila i velike bruto težine. Podnose ukupne težine i bruto težine vozila do 80 tona, sa prenosnim odnosima u rasponu od 3,80 do 7,18. Dvostruki prenosni sistem za poslove kod kojih vuča ide zajedno sa optimalnom potrošnjom goriva. Dvostruki prenosni sistem RB662 + R660 može da savlada ukupnu i bruto težinu do 80 tona sa prenosnim odnosima u rasponu od 2,92 do 4,88.",
            "cena"=>"300",
            "model"=>"Scania",
            "gorivo"=>"Dizel 120",
            "regBr"=>"BG-123-AE",
        ]);

        Kamion::create([
            "godiste"=>"2015",
            "opis"=>"Renault Magnum je kamion za teška opterećenja koji je proizvodio francuski proizvođač Renault Vehicules Industriels i kasnije Renault Trucks (takođe deo Renaulta, sada Volvo) od 1990. do 2013. Magnum je bio dostupan u polu i krutim konfiguracijama, obe konfiguracije su mogle kupiti sa 6×2 ili 4×2 pogonom. 6×4 je samo dizajniran za upotrebu teških tereta.",
            "cena"=>"450",
            "model"=>"Renault Magnum",
            "gorivo"=>"Dizel 1300",
            "regBr"=>"BG-321-EA",
        ]);

    }
}
