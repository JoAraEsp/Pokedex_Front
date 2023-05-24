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
        Schema::create('idencuesta', function (Blueprint $table) {
            $table->unsignedInteger('surveys_id');
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
            $table->text('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idencuesta');
    }
};
