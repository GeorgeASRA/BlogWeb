<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categorie')->insert(
            [
                'idCategorie' => 1,
                'nomCategorie'=>'Nouvelles',
                'descriptionCategorie'=>'Les nouvelles daujourdhui'
            ]
        );

        DB::table('Categorie')->insert(
            [
                'idCategorie' => 2,
                'nomCategorie'=>'Sports',
                'descriptionCategorie'=>'Les sports daujourdhui'
            ]
        );

        DB::table('Categorie')->insert(
            [
                'idCategorie' => 3,
                'nomCategorie'=>'Cuisine',
                'descriptionCategorie'=>'Les recettes faites avec amour'
            ]
        ); 
    }
}
