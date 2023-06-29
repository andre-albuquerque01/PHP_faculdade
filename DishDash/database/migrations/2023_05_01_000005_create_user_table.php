<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id_user')->comment('Contém o identificador do login do usuário');
            $table->string('email')->comment('Contém o e-mail do usuário');
            $table->boolean('status')->default(1)->comment('Contém o status do usuário, se está ativo ou inativo');
            $table->timestamp('email_verified_at')->nullable()->comment("Contém quando o e-mail foi autenticado");
            $table->string('password')->comment('Contém a senha do usuário');
            $table->rememberToken()->comment("Contém o status para lembrar as credenciais do usuário");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
