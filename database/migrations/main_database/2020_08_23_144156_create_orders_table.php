<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->nullable();
            $table->string('order_number')->unique();
            $table->BigInteger('logistic_id')->unsigned()->nullable();
            $table->BigInteger('customer_id')->unsigned()->nullable();
            $table->BigInteger('payment_id')->unsigned()->nullable();
            $table->string('order_date');
            $table->string('status');
            $table->string('payment_date');
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
        Schema::dropIfExists('orders');
    }
}
