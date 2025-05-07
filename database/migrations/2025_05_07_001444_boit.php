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
        Schema::create('boit', function (Blueprint $table) {
            $table->id();
            $table->string('vile');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->integer('qunt_ca');
            $table->integer('qunt_pa');
            $table->integer('qunt_pl');
            $table->integer('qunt_ve');
            $table->integer('qunt_me');
            $table->integer('qunt_or');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boit');
    }
};
