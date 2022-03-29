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
        Schema::table('contatos', function (Blueprint $table) {
            $table->boolean('contato_sms')->after('cargo')->default(false);
            $table->boolean('contato_whatsapp')->after('contato_sms')->default(false);
            $table->boolean('contato_email')->after('contato_whatsapp')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->dropColumn(['contato_sms', 'contato_whatsapp', 'contato_email']);
        });
    }
};
