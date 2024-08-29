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
            $table->id(); // Esto crea un campo 'id' auto-incrementable como PRIMARY KEY
            $table->string('name'); // Esto crea el campo 'name' como VARCHAR
            $table->foreignId('brand_id')->constrained(); // Campo 'brand_id' como clave foránea que referencia 'id' en la tabla 'brands'
            $table->decimal('price', 10, 2); // Esto crea el campo 'price' como DECIMAL
            $table->string('photo')->nullable();
            // $table->integer('sales_count')->default(0); 
            $table->timestamps(); // Esto crea los campos 'created_at' y 'updated_at'
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
