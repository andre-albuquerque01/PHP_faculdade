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
        Schema::create('product', function (Blueprint $table) {
            $table->unsignedBigInteger('id_product')->primary()->comment('Contém o identificador do produto');
            $table->string('name')->comment('Contém o nome do produto');
            $table->string('description')->comment('Contém a descrição do produto');
            $table->double('price', 5, 2)->comment('Contém o preço do produto');
            $table->string('file_image')->comment('Contém o caminho da imagem do produto');
            $table->string('brand')->comment('Contém a marca do produto');

            $table->unsignedSmallInteger('id_category')->comment('Contém a referência da categoria do produto na tabela "product"');
            $table->foreign('id_category')->references('id_category')->on('category')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedSmallInteger('id_image')->comment('Contém a referência da imagem do produto na tabela "product_image"');
            $table->foreign('id_image')->references('id_image')->on('product_image')->onDelete('restrict')->onUpdate('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
