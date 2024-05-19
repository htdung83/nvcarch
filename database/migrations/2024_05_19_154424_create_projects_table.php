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
        Schema::create('project_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 255);
            $table->tinyInteger('position')->default(0);
            $table->tinyInteger('enabled')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_category_id');
            $table->string('name', 100);
            $table->string('slug', 255);
            $table->string('description', 100)->nullable();
            $table->tinyInteger('enabled')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('project_category_id')->references('id')->on('project_categories');
        });

        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('full_path', 255);
            $table->string('description', 100)->nullable();
            $table->tinyInteger('enabled')->default(0);
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
