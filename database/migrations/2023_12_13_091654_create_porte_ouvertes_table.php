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
        Schema::create('porte_ouvertes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('titre_en');
            $table->string('slug');
            $table->string('lien')->nullable();
            $table->boolean('inscription');
            $table->string('image');
            $table->text('description');
            $table->text('description_en');
            $table->boolean('statut')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porte_ouvertes');
    }
};
