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
        Schema::create('person', function (Blueprint $table) {
            $table->bigIncrements('id_person')->comment('Contém o identificador do usuário');
            $table->string('first_name')->comment('Contém o primeiro nome do usuário');
            $table->string('last_name')->comment('Contém o sobrenome do usuário');
            $table->char('cpf', 14)->unique()->nullable()->comment('Contém o CPF do usuário');
            $table->enum('gender', ["Masculino", "Feminino", "Outro"])->nullable()->comment('Contém o sexo do usuário');
            $table->text('phone')->nullable()->comment('Contém o telefone do usuário');

            // $table->foreign('id_phone')->references('id_phone')->on('phone_number')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedSmallInteger('id_role')->nullable()->comment('Contém a referência da permissão do usuário na tabela "role"');
            $table->foreign('id_role')->references('id_role')->on('role')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedBigInteger('id_user')->comment('Contém a referência do login do usuário na tabela "user"');
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
