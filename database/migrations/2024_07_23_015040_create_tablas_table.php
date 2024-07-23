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
        //tabla usuarios
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
        });


        //tabla libros
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('titulo');
            $table->string('isbn');
            $table->string('editorial');
            $table->string('paginas');
            $table->timestamps();
        });
        

        //tabla ejemplars
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('localizacion');
            $table->unsignedBigInteger('libro_id');  
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->timestamps();
        });

        //tabla ejemplar_usuario
        Schema::create('ejemplar_usuario', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ejemplar_id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('ejemplar_id')->references('id')->on('ejemplars')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('ejemplar_usuario');
        Schema::dropIfExists('ejemplars');
        Schema::dropIfExists('libros');
        Schema::dropIfExists('usuarios');
    }
};
