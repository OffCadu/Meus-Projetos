<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consumos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reserva_id');
            $table->double('produto_quantidade');
            $table->timestamp('data_consumo')->useCurrent();
            $table->timestamps();
            //constraints
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('consumos', function (Blueprint $table) {
        //     $table->dropForeign('consumos_reserva_id_foreign');
        //     $table->dropColumn('reserva_id');
        // });
        Schema::dropIfExists('consumos');
    }
}
