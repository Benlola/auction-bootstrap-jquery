<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('product_id')->default(0);
            $table->unsignedInteger('bid_id')->default(0);
            $table->boolean('product_delivered')->unsigned()->nullable()->default(false)->comment('0:Pending, 1:Send');
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
        Schema::dropIfExists('winners');
    }
}
