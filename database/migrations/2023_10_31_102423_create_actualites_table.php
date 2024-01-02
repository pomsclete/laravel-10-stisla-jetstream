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
        Schema::create('actualites', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("titre_en");
            $table->string("slug_fr");
            $table->string("slug_en");
            $table->longText("description");
            $table->longText("description_en");
            $table->string("couverture");
            $table->boolean("etat")->default(0);
            $table->boolean("une")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualites');
    }
};
