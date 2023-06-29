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
        Schema::create('personal_access_token', function (Blueprint $table) {
            $table->bigIncrements("id")->comment("Contém o identificador do token de acesso");
            $table->morphs('tokenable');
            $table->string('name')->comment("Contém o campo opcional que permite atribuir um nome descritivo ao token");
            $table->string('token', 64)->unique()->comment("Contém o valor do token de acesso pessoal em si");
            $table->text('abilities')->nullable()->comment("Contém as habilidades (abilities) associadas ao token");
            $table->timestamp('last_used_at')->nullable()->comment("Contém o registro, a data e a hora da última vez que o token foi usado");
            $table->timestamp('expires_at')->nullable()->comment("Contém o a data da expiração do token");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_token');
    }
};
