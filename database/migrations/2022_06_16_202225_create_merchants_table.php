<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname', 40)->nullable();
            $table->string('lastname', 40)->nullable();
            $table->string('username', 40);
            $table->string('mobile', 40)->nullable();
            $table->string('email', 40);
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedDecimal('balance', 28, 8)->default(0);
            $table->string('password');
            $table->string('country_code', 40);
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('social_links')->nullable();
            $table->text('address')->nullable();
            $table->unsignedDecimal('avg_rating', 5)->default(0);
            $table->unsignedInteger('total_rating')->default(0);
            $table->unsignedInteger('review_count')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('ev')->default(0);
            $table->tinyInteger('sv')->default(0);
            $table->string('ver_code', 40)->nullable();
            $table->dateTime('ver_code_send_at');
            $table->tinyInteger('ts')->default(0);
            $table->tinyInteger('tv')->default(1);
            $table->string('tsc')->nullable();
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
        Schema::dropIfExists('merchants');
    }
}
