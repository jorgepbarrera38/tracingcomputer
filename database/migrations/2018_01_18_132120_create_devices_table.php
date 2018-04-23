<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionary_id')->unsigned();
            $table->foreign('funcionary_id')->references('id')->on('funcionaries');

            $table->integer('ubication_id')->unsigned();
            $table->foreign('ubication_id')->references('id')->on('ubications');

            $table->integer('dependence_id')->unsigned();
            $table->foreign('dependence_id')->references('id')->on('dependences');

            $table->integer('brand_id')->unsigned()->default(1);
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('element_id')->unsigned();
            $table->foreign('element_id')->references('id')->on('elements');
            
            $table->text('description');
            $table->enum('status', ['MALO', 'REGULAR', 'BUENO'])->default('BUENO');
            
            $table->enum('acquisition', ['COMPRA', 'DONACIÓN'])->default('COMPRA');
            $table->string('cost')->default(0);
            $table->date('datebuy')->default('1900-01-31');
            $table->date('initoperation')->default('1900-01-31');
            $table->string('usefullife')->default(0);

            $table->enum('state', ['active', 'inactive'])->default('active');

            $table->string('serial', 100)->unique();
            $table->string('code', 100)->unique();
            $table->text('observations')->nullable();

            $table->string('mant')->nullable();
            $table->string('photo')->nullable();

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
        Schema::dropIfExists('devices');
    }
}
