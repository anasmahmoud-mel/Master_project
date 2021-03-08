<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurnysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('partner_id')->unsigned()->nullable()->index();
            $table->integer('booking_id')->unsigned()->nullable()->index();
            $table->integer('visitor_id')->unsigned()->nullable()->index();
            $table->string('from');
            $table->string('to');
            $table->string('date');
            $table->string('break');
            $table->string('arrival_time');
            $table->string('driver_name');
            $table->double('price');
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
        Schema::dropIfExists('jurnys');
    }
}
