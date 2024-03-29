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
        Schema::create('password_reset_token', function (Blueprint $table) {
            $table->string('email')->primary()->comment("Contém o e-mail único para recuperação da senha da conta do usuário");
            $table->string('token')->comment("Contém o token para recuperar a senha da conta do usuário");
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_token');
    }
};
