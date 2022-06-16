<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname', 40)->nullable();
            $table->string('lastname', 40)->nullable();
            $table->string('username', 40);
            $table->string('email', 40);
            $table->string('country_code', 40)->nullable();
            $table->string('mobile', 40)->nullable();
            $table->decimal('balance', 28, 8)->default(0);
            $table->string('password');
            $table->string('image')->nullable();
            $table->text('address')->nullable()->comment('contains full address');
            $table->boolean('status')->default(true)->comment('0: banned, 1: active');
            $table->boolean('ev')->default(false)->comment('0: email unverified, 1: email verified');
            $table->boolean('sv')->default(false)->comment('0: sms unverified, 1: sms verified');
            $table->string('ver_code', 40)->nullable()->comment('stores verification code');
            $table->dateTime('ver_code_send_at')->nullable()->comment('verification send time');
            $table->boolean('ts')->default(false)->comment('0: 2fa off, 1: 2fa on');
            $table->boolean('tv')->default(true)->comment('0: 2fa unverified, 1: 2fa verified');
            $table->string('tsc')->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamps();

            $table->unique(['username', 'email'], 'username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
