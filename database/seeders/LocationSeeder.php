<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Locality;
use App\Models\Location; 


class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Location::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define the data
        $locations=[
            [
                'slug'=>null,
                'designation'=>'Espace Delvaux / La Vénerie',
                'address'=>'3 rue Gratès',
                'locality_postal_code'=>'1170',
                'website'=>'https://lavenerie.be',
                'phone'=>'+32(0)2/663.85.50',
            ],
            [
                'slug'=>null,
                'designation'=>'Dexia Art Center',
                'address'=>'50 rue de l\'Ecuiller',
                'locality_postal_code'=>'1000',
                'website'=>null,
                'phone'=>null,
            ],
            [
                'slug'=>null,
                'designation'=>'La Samaritaine',
                'address'=>'16 rue de la Samaritaine',
                'locality_postal_code'=>'1000',
                'website'=>'https://lasamaritaine.be',
                'phone'=>null,
            ],
            [
                'slug'=>null,
                'designation'=>'Espace Magh',
                'address'=>'17 rue du Poinçon',
                'locality_postal_code'=>'1000',
                'website'=>'https://espacemagh.be',
                'phone'=>'+32(0)2/274.01.10',
            ],
        ];

         //Insert data in the table
         foreach ($locations as &$data){
             //recherche de la localité correspondante au code postal
             $locality = Locality::firstWhere('postal_code',$data['locality_postal_code']);
             unset($data['locality_postal_code']);

             $data['slug'] = Str::slug($data['designation'],'-');
             $data['locality_id'] = $locality->id; //Référence à la table localities
         }
          
        DB::table('locations')->insert($locations);
    }
}
