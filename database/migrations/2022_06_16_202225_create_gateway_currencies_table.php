<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewayCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateway_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 40)->nullable();
            $table->string('currency', 40)->nullable();
            $table->string('symbol', 40)->nullable();
            $table->integer('method_code')->nullable();
            $table->string('gateway_alias', 40)->nullable();
            $table->decimal('min_amount', 28, 8)->default(0);
            $table->decimal('max_amount', 28, 8)->default(0);
            $table->decimal('percent_charge', 5)->default(0);
            $table->decimal('fixed_charge', 28, 8)->default(0);
            $table->decimal('rate', 28, 8)->default(0);
            $table->string('image')->nullable();
            $table->text('gateway_parameter')->nullable();
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
        Schema::dropIfExists('gateway_currencies');
    }
}
