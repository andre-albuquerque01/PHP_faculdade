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
        Schema::create('item_order', function (Blueprint $table) {
            $table->unsignedBigInteger('id_itens')->primary()->comment('Contém o identificador do item do pedido');
            $table->integer('quantity')->comment('Contém a quantidade de itens no pedido');

            $table->unsignedBigInteger('id_order')->comment('Contém a referência do pedido do usuário na tabela "order"');
            $table->foreign('id_order')->references('id_order')->on('order')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedBigInteger('id_product')->comment('Contém a referência da forma de pagamento do usuário na tabela "payment_method"');
            $table->foreign('id_product')->references('id_product')->on('product')->onDelete('restrict')->onUpdate('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_order');
    }
};
