<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 50)->unique();
            $table->foreignId('modelo_id')->constrained('modelos')->cascadeOnDelete();
            $table->foreignId('cor_id')->constrained('cores')->cascadeOnDelete();
            $table->year('ano_fabricacao');
            $table->year('ano_modelo');
            $table->integer('km');
            $table->integer('fipe')->nullable();
            $table->integer('preco');
            $table->string('localizacao', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
