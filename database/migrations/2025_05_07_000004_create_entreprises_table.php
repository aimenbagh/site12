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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->nullable()->default(null);
            $table->string('name')->nullable(); // Permet de ne pas fournir de valeur pour 'name'
            $table->string('code')->unique(); // Code unique de l'entreprise
            $table->string('address')->nullable(); // Adresse de l'entreprise
            $table->string('city')->nullable(); // Ville de l'entreprise
            $table->string('postal_code')->nullable(); // Code postal
            $table->string('phone')->nullable(); // Numéro de téléphone
            $table->string('email')->unique(); // Email de l'entreprise
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
