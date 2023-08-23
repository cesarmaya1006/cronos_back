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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->unsignedBigInteger('docutipos_id');
            $table->foreign('docutipos_id', 'fk_usuario_docutipos')->references('id')->on('docutipos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id', 'fk_persona_roles')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->string('usuario', 100);
            $table->string('password', 100);
            $table->string('identificacion', 100)->unique();
            $table->string('nombre1', 50);
            $table->string('nombre2', 50)->nullable();
            $table->string('apellido1', 50);
            $table->string('apellido2', 50)->nullable();
            $table->string('telefono', 50);
            $table->string('direccion', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('foto', 255)->default('usuario-inicial.jpg');
            $table->boolean('estado')->default('1');
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
