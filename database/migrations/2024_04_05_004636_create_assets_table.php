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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('record'); //numero do tombamento
            $table->string('brand'); //marca do ativo
            $table->string('name'); //nome do ativo
            $table->text('description'); //descrição básica
            $table->text('health'); //descrição básica
            $table->integer('uptime')->default(0); //descrição básica
            $table->string('invoice'); //numero da nota fiscal
            $table->string('serial_number'); //numero de série do item
            $table->decimal('price'); //19.99 
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
