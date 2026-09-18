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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable(); // Descrição curta
            $table->text('long_description')->nullable(); // Descrição longa
            
            // Decimal com 6 dígitos no total e 2 casas decimais (Ex: 9999.99)
            $table->decimal('price', 6, 2)->default(0); 
            $table->string('image')->nullable(); // Caminho da imagem (opcional)
            $table->integer('quantity')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
