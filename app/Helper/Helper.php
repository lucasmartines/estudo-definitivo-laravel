<?php

namespace App\Helper;

class Helper
{
    public static function converter_nome_detalhe($nome){
        if($nome == "ar_condicionado"){return "Ar Condicionado";}
        if($nome == "direcao_hidraulica"){return "Direção Hidraulica";}
        else{ return ucfirst( $nome ) ; }
    }
}