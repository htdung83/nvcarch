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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('img_url');
            $table->string('head_text')->nullable();
            $table->string('highlight_text')->nullable();
            $table->string('button_url')->nullable();
            $table->unsignedTinyInteger('position')->default(0);
            $table->unsignedTinyInteger('enabled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
