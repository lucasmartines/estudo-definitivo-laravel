<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Carro;

class CarroDetalhe extends Model
{
    use HasFactory;

    
    public function carro():BelongsTo{
        return $this->belongsTo(Carro::class);
    }
}
