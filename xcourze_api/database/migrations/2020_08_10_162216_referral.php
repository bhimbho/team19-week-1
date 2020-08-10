<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Referral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral', function($table){
            $table->increments('referral_id');
            $table->integer('referred_id');
            $table->integer('referrer_id');
            $table->integer('referal_status');
            $table->string('email')->unique;
            $table->string('username');
            $table->string('password');
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
        //
    }
}
