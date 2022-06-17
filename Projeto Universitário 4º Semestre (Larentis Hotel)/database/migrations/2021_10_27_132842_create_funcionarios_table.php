<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pessoa_fisica_id')->nullable();
            $table->double('clt');
            $table->double('salario',10,2);
            $table->string('grau_instrucao',240);
            $table->timestamp('data_admissao');
            $table->timestamps();
            //constraints
            $table->foreign('pessoa_fisica_id')->references('id')->on('pessoa_fisicas')->onDelete('cascade');
            $table->unique('pessoa_fisica_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table ->dropForeign('funcionarios_pessoa_fisica_id_foreign');
            $table->dropColumn('pessoa_fisica_id');
        });
        Schema::dropIfExists('funcionarios');
    }
}
