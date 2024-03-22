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
        Schema::create('asset_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('assets_id');
            $table->string('type'); //mobiliário, eletronico, infraestrutura,
            $table->string('neworused'); //comprado novo ou usado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_specifications');
    }
};
