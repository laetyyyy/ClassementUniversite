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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->string('statut');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('universite_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('universite_id')->references('id')->on('universite');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
