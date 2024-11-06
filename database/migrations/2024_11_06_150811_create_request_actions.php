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
        Schema::create('request_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action_type');
            //clave foranea a requests
            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('requests');
            //clave foranea de user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_actions');
    }
};