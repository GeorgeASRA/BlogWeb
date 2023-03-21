<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class articleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Article')->insert(
            [
                'idArticle' => 1,
                'titreArticle'=>'Un humidex de 28 attendu mardi!',
                'texteArticle'=>'La vague de chaleur automnale qui a affecté le Québec au cours de la fin de semaine va se poursuivre au cours des prochains jours. Le mercure devrait dépasser les 20 °C dans plusieurs régions de la province et l’indice humidex pourrait même atteindre 28 à Montréal mardi.',
                'resumeArticle'=>'Au cours des prochains jours, les températures vont demeurer au-dessus des normales de saisons sur plusieurs secteurs.',
                'dateArticle' => '2022-10-24',
                'idUtilisateur'=>'1',
                'idCategorie'=>'1'
            ]
        );

        DB::table('Article')->insert(
            [
                'idArticle' => 2,
                'titreArticle'=>'Crosby contre McDavid',
                'texteArticle'=>'Signe que Sid a encore faim à 35 ans, les Penguins connaissent un début de saison foudroyant avec une fiche de 4-0-1. Les Canadiens de Montréal leur ont ingligé leur unique défaite cette saison. C\'est un peu plus difficile pour la troupe de McDavid, qui affiche un tiède dossier de 2-3-0. McDavid et Crosby ont chacun amassé 10 points depuis le début de la saison. ',
                'resumeArticle'=>'Sidney Crosby contre Connor McDavid. Voilà. Vous ne pourrez pas trouver mieux.',
                'dateArticle' => '2022-10-23',
                'idUtilisateur'=>'1',
                'idCategorie'=>'2'
            ]
        );

        DB::table('Article')->insert(
            [
                'idArticle' => 3,
                'titreArticle'=>'Un pâté croûte aux bleuets sauvages',
                'texteArticle'=>'le pâté croûte est une spécialité culinaire française, représentant un défi technique particulier, puisqu\'il implique des compétences en boucherie, en boulangerie et en cuisine. Le plat est généralement composé de couches de viandes variées, notamment de porc, de gibier et d\'autres garnitures, maintenues par une gelée d\'aspic, le tout enfermé dans une croûte de pâte feuilletée décorée. C\'est pour préserver cette tradition centenaire que le Championnat du Monde de Pâté Croûte a été créé.',
                'resumeArticle'=>'Un chef montréalais a remporté les grands honneurs lundi en cuisinant le meilleur pâté croûte des Amériques',
                'dateArticle' => '2022-10-24',
                'idUtilisateur'=>'2',
                'idCategorie'=>'3'
            ]
        );
    }
}
