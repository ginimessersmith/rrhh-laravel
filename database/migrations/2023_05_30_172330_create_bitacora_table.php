<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 100);
            $table->timestamp('fecha');
            $table->unsignedBigInteger('idUsuario');

            $table->timestamps();

            $table->foreign('idUsuario')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('bitacora', function (Blueprint $table) {
            $table->dropForeign(['idUsuario']);
        });*/

        Schema::dropIfExists('bitacora');
    }
}
