<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Commentaire')->insert(
            [
                'idCommentaire' => 1,
                'textCommentaire'=>'Je veux la recette svp!!!',
                'dateCommentaire'=>'2022-10-20',
                'idUtilisateur'=>'1',
                'idArticle'=>'3'
            ]
        );
        DB::table('Commentaire')->insert(
            [
                'idCommentaire' => 2,
                'textCommentaire'=>'Excellent article mon ami!',
                'dateCommentaire'=>'2022-10-20',
                'idUtilisateur'=>'2',
                'idArticle'=>'1'
            ]
        );
    }
}
