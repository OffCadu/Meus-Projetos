<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pessoa_fisica_id')->nullable();
            $table->integer('cep');
            $table->string('cidade',240);
            $table->string('rua',240);
            $table->string('estado',240);
            $table->integer('numero');
            $table->string('complemento',240);
            $table->timestamps();
            //constraints
            $table->foreign('pessoa_fisica_id')->references('id')->on('pessoa_fisicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enderecos', function (Blueprint $table) {
            $table ->dropForeign('enderecos_pessoa_fisica_id_foreign');
            $table->dropColumn('pessoa_fisica_id');
        });
        Schema::dropIfExists('enderecos');
    }
}
