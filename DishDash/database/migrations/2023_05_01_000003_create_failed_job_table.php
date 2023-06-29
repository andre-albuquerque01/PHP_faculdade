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
        Schema::create('failed_job', function (Blueprint $table) {
            $table->bigIncrements("id")->comment("Contém o identificador do processo falhou");
            $table->string('uuid')->unique()->comment("Contém o UUID do processo que falhou");
            $table->text('connection')->comment("Contém o nome da conexão de fila na qual o trabalho falhou");
            $table->text('queue')->comment("Contém o nome da fila na qual o trabalho falhou");
            $table->longText('payload')->comment("Contém os detalhes do trabalho que falhou");
            $table->longText('exception')->comment("Contém a mensagem de exceção gerada quando o trabalho falhou");
            $table->timestamp('failed_at')->useCurrent()->comment("Contém a data e a hora em que o trabalho falhou");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_job');
    }
};
