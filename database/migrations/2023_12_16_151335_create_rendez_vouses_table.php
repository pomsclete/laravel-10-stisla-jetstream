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
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->string("civilite");
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->string("telephone");
            $table->string("niveau");
            $table->string("formation");
            $table->string("campus");
            $table->string("autorisation");
            $table->integer("etat")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
