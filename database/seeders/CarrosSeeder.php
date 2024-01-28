<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table("carros")->insert(
            [ "id" => 1 , "nome"=>"Opala" , "ano" => "1980" , "cilindrada" => "4.1" , "peso" => 1125, "potencia_cv" => 171 ,"created_at" => date("Y-m-d") ]);
        DB::table("carros")->insert(
            [ "id" => 2 , "nome"=>"Vectra" ,"ano" => "2010" , "cilindrada" => "2.0" , "peso" => 1280 ,"potencia_cv" => 140 , "created_at" => date("Y-m-d")]);
        DB::table("carros")->insert(
            [ "id" => 3 , "nome"=>"Meriva" ,"ano" => "2008" , "cilindrada" => "1.8" , "peso" => 1225 , "potencia_cv" => 114, "created_at" => date("Y-m-d") ]);
   

        DB::table("carro_detalhes")->insert(
            ["nome_parametro" => "ar_condicionado"    ,  "valor_parametro" => 1 , "carro_id" => 1 ]
        );
        DB::table("carro_detalhes")->insert(
            ["nome_parametro" => "direcao_hidraulica" ,  "valor_parametro" => 1 , "carro_id" => 1]
        );


        DB::table("carro_detalhes")->insert(
            ["nome_parametro" => "ar_condicionado"    ,  "valor_parametro" => 1 , "carro_id" => 2]
        ); 


        DB::table("carro_detalhes")->insert(
            ["nome_parametro" => "airbag"    ,  "valor_parametro" => 1 , "carro_id" => 3]
        ); 
   
        DB::table("carro_detalhes")->insert(
            ["nome_parametro" => "ar_condicionado"    ,  "valor_parametro" => 1 , "carro_id" => 3]
        ); 

        DB::table("carro_detalhes")->insert(
            ["nome_parametro" => "direcao_hidraulica"    ,  "valor_parametro" => 1 , "carro_id" => 3]
        ); 

    }
}
