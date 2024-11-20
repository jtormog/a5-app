<?php

use App\Models\Rol;
use App\Models\User;
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
        //de momento esta migración no se usa

        // Schema::create('rols_users', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(User::class);
        //     $table->foreignIdFor(Rol::class);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_users');
    }
};
