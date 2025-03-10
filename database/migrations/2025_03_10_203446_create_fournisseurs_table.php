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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            
            $table->string('raison_social');
            $table->string('nom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('cp')->nullable();
            $table->string('pays')->nullable();
            $table->string('tel')->nullable();
            $table->string('ice')->nullable();
            $table->string('if')->nullable();
            $table->string('rc')->nullable();
            $table->string('compte_bancaire')->nullable();
            $table->string('banque')->nullable();
            $table->text('observation')->nullable();
            $table->string('photo')->nullable();
            $table->double('solde')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
    }
};
