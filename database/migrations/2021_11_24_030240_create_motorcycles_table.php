<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorcyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->integer('bid')->unsigned()->comment('廠牌');
            $table->string('name')->comment('車名');
            $table->integer('year')->nullable()->comment('製造年份');
            $table->integer('CC')->unsigned()->nullable()->comment('CC數');
            $table->integer('eid')->unsigned()->comment('引擎形式');
            $table->double('horsepower')->unsigned()->nullable()->comment('馬力');
            $table->double('torque')->unsigned()->nullable()->comment('扭力');
            $table->double('tank_capacity')->unsigned()->nullable()->comment('油箱容量');
            $table->double('sitting_height')->unsigned()->nullable()->comment('座高');
            $table->integer('price')->unsigned()->nullable()->comment('售價');
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
        Schema::dropIfExists('motorcycles');
    }
}
