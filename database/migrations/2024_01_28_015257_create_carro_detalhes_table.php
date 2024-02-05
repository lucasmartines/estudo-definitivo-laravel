<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Carro;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carro_detalhes', function (Blueprint $table) {
            $table->id();

            $table->string("nome_parametro");
            $table->string("valor_parametro");

            $table->timestamps();             
            $table->foreignIdFor(Carro::class);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       

        Schema::dropIfExists('carro_detalhes');
    }
};
