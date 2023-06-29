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
        Schema::create('order', function (Blueprint $table) {
            $table->unsignedBigInteger('id_order')->primary()->comment('Contém o identificador do pedido');
            $table->smallInteger('table')->comment('Contém o número da mesa do usuário');
            $table->char('status', 10)->comment('Contém o status do pedido do usuário');
            $table->string('bill')->comment('Contém o numero do pedido, para poder gerar a nota fiscal');
            $table->double('total_price')->comment('Contém o preço total do pedido');

            $table->unsignedBigInteger('id_person')->comment('Contém a referência do usuárop na tabela "person"');
            $table->foreign('id_person')->references('id_person')->on('person')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedSmallInteger('id_form')->comment('Contém a referência da forma de pagamento do usuário na tabela "payment_method"');
            $table->foreign('id_form')->references('id_form')->on('form_payment')->onDelete('restrict')->onUpdate('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
