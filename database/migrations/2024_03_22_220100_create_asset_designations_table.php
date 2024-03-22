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
        Schema::create('asset_designations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('assets_id');
            $table->unsignedInteger('departments_id');
            $table->unsignedInteger('users_id');
            $table->Integer('quantity');
            $table->unsignedInteger('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_designations');
    }
};
