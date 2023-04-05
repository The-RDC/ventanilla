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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->unique();
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('avatar');
            $table->string('nacionalidad');
            $table->string('nro_documento');
            $table->string('tipo_documento');
            $table->string('ext_visa_laboral');
            $table->string('email_personal');
            $table->string('email_institucional');
            $table->string('fecha_nacimiento');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('telf_celular');
            $table->string('telf_fijo');
            $table->string('direccion');
            $table->string('estado_registro');
            $table->string('estado');
            $table->string('nom_sis');
            $table->string('num_suc');
            $table->string('id_regional');
            $table->string('id_sucursal');
            $table->string('id_empresa');
            $table->string('id_cargo');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
