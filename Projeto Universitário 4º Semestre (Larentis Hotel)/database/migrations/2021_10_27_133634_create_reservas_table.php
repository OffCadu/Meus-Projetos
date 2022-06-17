<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pessoa_fisica_id');
            $table->timestamp('check_in');
            $table->timestamp('check_out');
            $table->integer('adultos');
            $table->integer('criancas');
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
        Schema::table('reservas', function (Blueprint $table) {
            $table ->dropForeign('reservas_pessoa_fisica_id_foreign');
            $table->dropColumn('pessoa_fisica_id');
        });

        Schema::dropIfExists('reservas');
    }
}
