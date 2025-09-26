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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();                                           
            $table->string('nome_completo', 100);
            $table->string('especialidade',80);
            $table->string('crm',80);
            $table->date('data_nascimento');
            $table->string('cpf', 80);
            $table->string('email');
            $table->string('telefone');
            $table->string('horarios_disponiveis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};