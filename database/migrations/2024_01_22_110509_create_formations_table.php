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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_formation_id')->constrained();
            $table->string('couverture');
            $table->string('titre');
            $table->string('slug');
            $table->string('titreEn');
            $table->text('description');
            $table->text('descriptionEn');
            $table->text('raison');
            $table->text('raisonEn');
            $table->text('debauche');
            $table->text('debaucheEn');
            $table->string('admission');
            $table->string('admissionEn');
            $table->string('duree');
            $table->string('dureeEn');
            $table->text('condition');
            $table->text('conditionEn');
            $table->string('brochure')->nullable();
            $table->boolean('etat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
