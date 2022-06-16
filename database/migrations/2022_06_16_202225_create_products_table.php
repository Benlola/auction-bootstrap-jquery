<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id')->default(0);
            $table->unsignedInteger('merchant_id')->default(0);
            $table->unsignedInteger('admin_id')->default(0);
            $table->string('name')->nullable();
            $table->decimal('price', 28, 8)->default(0);
            $table->unsignedInteger('total_bid')->default(0);
            $table->dateTime('started_at')->nullable();
            $table->dateTime('expired_at')->nullable();
            $table->decimal('avg_rating', 5)->default(0);
            $table->unsignedInteger('total_rating')->default(0);
            $table->unsignedInteger('review_count')->default(0);
            $table->string('image', 40)->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('specification')->nullable();
            $table->boolean('status')->default(false)->comment('0: Pending, 1: Live');
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
        Schema::dropIfExists('products');
    }
}
