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
        Schema::create('videogames', function (Blueprint $table) {
            /* La tabla creada debe tener como mínimo 10 columnas.
            De las columnas creadas, usar al menos 5 tipos de datos.
            De las columnas creadas, usar al menos 5 modificadores de columna */
            $table->id();
            $table->string('name')->default('Sin nombre')->unique();
            $table->string('developer')->comment('developer name');
            $table->string('genre');
            $table->date('release_date');
            $table->text('description')->nullable();
            $table->integer('rating')->unsigned()->nullable(); // unsigned() para que no acepte valores negativos
            $table->float('price', 8, 2)->default(0.00);
            $table->boolean('is_multiplayer')->default(false);
            $table->enum('platform', ['PC', 'PlayStation', 'Xbox', 'Nintendo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videogames');
    }
};
