<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_fisicas', function (Blueprint $table) {
            //columns
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->double('cpf');
            $table->double('identidade');
            $table->string('uf');
            $table->date('data_nascimento');
            $table->double('telefone');
            $table->timestamps();
            //constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->unique('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa_fisicas', function (Blueprint $table) {
            $table ->dropForeign('pessoa_fisicas_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('pessoa_fisicas');
    }
}
