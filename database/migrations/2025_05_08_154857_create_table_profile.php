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
        Schema::create('profile', function (Blueprint $table) {
            $table->id(); //Campo clave autoicremental
            $table->string('nombres',40)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('apellidos',40)->nullable();
            $table->string('dni',40)->nullable();
            $table->char('sexo',1)->nullable();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
