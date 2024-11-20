<?php

use App\Models\Fichero;
use App\Models\FicheroCompartido;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fichero_compartidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fichero_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        // FicheroCompartido::create(
        //     [
        //         'fichero_id' => Fichero::first()->id,
        //         'user_id' => 2,
        //     ]
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichero_compartidos');
    }
};
