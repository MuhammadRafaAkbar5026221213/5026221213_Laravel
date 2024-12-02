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
        Schema::create('blueray', function (Blueprint $table) {
            $table->integer('kodeblueray')->primary();
            $table->string('merkblueray', 30);
            $table->integer('stokblueray');
            $table->char('tersedia', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blueray');
    }
};
