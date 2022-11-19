<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("modelo");

            $table->foreignId('marca_id')->constrained();

            $table->string("ano");
            $table->string("ano_modelo");
            $table->decimal("km",2,10);
            $table->string("cambio");
            $table->string("combustivel");
            $table->string("cor");
            $table->decimal("preco", 10, 2);
            $table->string("img_path");
            $table->string("descricao");
            $table->string("contato");
            $table->string("endereco");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
};
