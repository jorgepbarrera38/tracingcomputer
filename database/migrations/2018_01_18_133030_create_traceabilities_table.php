<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraceabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traceabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('device_id')->unsigned();
            $table->foreign('device_id')->references('id')->on('devices');

            $table->integer('funcionary_id')->unsigned();
            $table->foreign('funcionary_id')->references('id')->on('funcionaries');

            $table->integer('ubication_id')->unsigned();
            $table->foreign('ubication_id')->references('id')->on('ubications');

            $table->integer('dependence_id')->unsigned();
            $table->foreign('dependence_id')->references('id')->on('dependences');

            $table->text('observations');
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
        Schema::dropIfExists('traceabilities');
    }
}
