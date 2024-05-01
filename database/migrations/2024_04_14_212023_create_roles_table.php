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
        Schema::create('roles', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('user_has_roles', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->string('role_id', 20);

            $table->primary(['user_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_has_roles');
        Schema::dropIfExists('roles');
    }
};
