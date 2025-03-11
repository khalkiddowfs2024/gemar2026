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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description');
            $table->string('image');
            $table->double('prix_ht');
            $table->double('tva');
            $table->double('stock');
            $table->double('prix_achat_ht');
            $table->foreignId('sous_famille_id')->constrained();
            $table->foreignId('unite_id')->constrained();
            $table->foreignId('marque_id')->constrained();
            $table->boolean('actif')->default(true);

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
