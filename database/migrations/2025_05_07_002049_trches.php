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
        Schema::create('trches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_admin')->constrained('users')->onDelete('cascade'); // Clé étrangère vers users
            $table->foreignId('id_entreprises')->constrained('entreprises')->onDelete('cascade'); // Clé étrangère vers entreprises
            $table->integer('qunt_ca'); // Quantité CA
            $table->integer('qunt_pa'); // Quantité PA
            $table->integer('qunt_pl'); // Quantité PL
            $table->integer('qunt_ve'); // Quantité VE
            $table->integer('qunt_me'); // Quantité ME
            $table->integer('qunt_or'); // Quantité OR
            $table->text('description')->nullable(); // Description
            $table->string('status')->default('active'); // Statut (active/inactive)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trches');
    }
};
