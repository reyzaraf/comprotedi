<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHomeFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_home_footer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('background_footer');
            $table->string('logo_footer');
            $table->string('desc_footer');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('address_footer');
            $table->string('phone_footer');
            $table->string('mail_footer');
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
        Schema::dropIfExists('table_home_footer');
    }
}
