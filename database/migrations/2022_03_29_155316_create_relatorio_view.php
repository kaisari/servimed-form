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
        $query = "CREATE VIEW relatorio
                    AS
                    SELECT cliente_id, cnpj, nome AS nome_contato, cargo, contatos.telefone, whatsapp, contatos.email,
                           contato_sms, contato_whatsapp, contato_email
                      FROM contatos
                     INNER JOIN clientes ON clientes.id = contatos.cliente_id";
        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW relatorio");
    }
};
