<?php

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
        Schema::create('propect_brochures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formationId')->constrained();
            $table->string('prenom');
            $table->string('nom');
            $table->string('telephone');
            $table->string('email');
            $table->boolean('statut')->default(0);
            $table->boolean('sent_email')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propect_brochures');
    }
};
