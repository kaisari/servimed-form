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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('uf');
            $table->string('telefone');
            $table->string('email');
            $table->string('email_nfe');
            $table->string('email_boleto');
            $table->string('email_cobranca');
            $table->string('email_contato');
            $table->string('email_compradores');
            $table->string('ramo_atividade');
            $table->string('ramo_atividade_desc');
            $table->string('cnpj');
            $table->string('ie');
            $table->string('rede');
            $table->string('grupo_economico');
            $table->string('organizacao_vendas');
            $table->string('organizacao_vendas_desc');
            $table->string('filial_faturamento');
            $table->string('motivo_bloqueio');
            $table->string('descricao_bloqueio');
            $table->string('setor_principal');
            $table->string('setor_principal_desc');
            $table->string('setor_secundario');
            $table->string('setor_secundario_desc');
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
        Schema::dropIfExists('clientes');
    }
};
