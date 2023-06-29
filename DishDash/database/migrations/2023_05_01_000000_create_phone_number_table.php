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
        Schema::create('phone_number', function (Blueprint $table) {
            $table->bigIncrements('id_phone')->comment('Contém o identificador do telefone');
            $table->string('ddi', 3)->nullable(true)->comment('Contém o código da discagem direta internacional');
            $table->string('ddd', 2)->comment('Contém o codigo da discagem direta à distância');
            $table->char('number', 9)->unique()->comment('Contém o numero do telefone do usuário');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_number');
    }
};
