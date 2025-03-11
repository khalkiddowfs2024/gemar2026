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
        Schema::create('reglement_clients', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->useCurrent();
            $table->double('montant')->nullable();
            $table->string('document')->nullable();
            $table->foreignId('mode_reglement_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reglement_clients');
    }
};
