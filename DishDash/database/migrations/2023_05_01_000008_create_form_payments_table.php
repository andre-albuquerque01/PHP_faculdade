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
        Schema::create('form_payment', function (Blueprint $table) {
            $table->smallIncrements('id_form')->comment('Contém o identificador da forma de pagamento');
            $table->string('description')->comment('Contém a descrição da forma de pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_payment');
    }
};
