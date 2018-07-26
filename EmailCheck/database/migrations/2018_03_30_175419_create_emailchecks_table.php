<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailchecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailchecks', function (Blueprint $table) {
          $table->increments('id');
          $table->string('mail_to');
          $table->string('mail_from');
          $table->string('mail_sub');
          $table->string('mail_body');
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
        Schema::dropIfExists('emailchecks');
    }
}
