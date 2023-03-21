<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class utilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Utilisateur')->insert(
            [
                'idUtilisateur' => 1,
                'pseudo'=>'caroline123',
                'email'=>'caroline@gmail.com',
                'motDePass'=> 'password123'
            ]
        );
        
        DB::table('Utilisateur')->insert(
            [
                'idUtilisateur' => 2,
                'pseudo' => 'Joel44',
                'email' => 'joel44@gmail.com',
                'motDePass' => 'password321'
            ]
        );
    }
}
