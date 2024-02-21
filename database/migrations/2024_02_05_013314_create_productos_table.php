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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('categoria');
            $table->decimal('precio', 10, 2);
            $table->string('imagen');
            $table->unsignedBigInteger('subcategoria')->nullable();
            $table->string('peso')->nullable();
            $table->string('medidas')->nullable();
            $table->string('color')->nullable();
            $table->string('tipo')->nullable();
            $table->string('diametro')->nullable();
            $table->string('eje')->nullable();
            $table->string('altura')->nullable();
            $table->text('descripcion1')->nullable();
            $table->text('descripcion2')->nullable();
            $table->text('descripcion_detallada')->nullable();
            $table->text('informacion_adicional')->nullable();
            $table->timestamps();

            $table->foreign('subcategoria')->references('id')->on('subcategorias')->onDelete('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
