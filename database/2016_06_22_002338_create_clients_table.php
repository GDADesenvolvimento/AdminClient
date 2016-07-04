<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->string('cnpj',18);
            $table->string('cpf',14);
            $table->string('email_contato');
            $table->string('email_cobranca');
            $table->string('telefone_contato');
            $table->string('telefone_cobranca');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('municipio');
            $table->string('uf',2);
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
        Schema::drop('clients');
    }
}
