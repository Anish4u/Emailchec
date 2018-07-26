<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailAcountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_acounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_name');
            $table->string('from_mail');
            $table->string('username');
            $table->string('password');
            $table->string('mail_server_type');
            $table->string('port');
            $table->string('secure');
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
        Schema::dropIfExists('email_acounts');
    }
}
