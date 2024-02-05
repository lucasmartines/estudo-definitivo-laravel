<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CarroDetalhe;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Carro extends Model
{
    use HasFactory;

    public $fillable = ['nome',"ano","cilindrada","peso","potencia_cv","descricao"];


    public function detalhes():hasMany{
        return $this->hasMany(CarroDetalhe::class );
    }
}
