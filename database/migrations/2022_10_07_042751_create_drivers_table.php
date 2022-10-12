<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();           
            $table->string('name')->comment('車手');
            $table->tinyInteger('tid')->unsigned()->comment('所屬車隊');
            $table->integer('number')->unsigned()->comment('車號');
            $table->integer('frequency')->unsigned()->comment('出賽次數');
            $table->double('integral')->unsigned()->comment('生涯積分');
            $table->date('birthday')->comment('生日');
            $table->string('countryofbirth')->comment('出生國家');
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
        Schema::dropIfExists('drivers');
    }
}
