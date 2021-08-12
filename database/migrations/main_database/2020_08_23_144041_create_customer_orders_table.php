<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->nullable();
            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('customer_province')->nullable();
            $table->string('customer_postalcode')->nullable();
            $table->string('customer_phone');
            $table->string('customer_phone2')->nullable();
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
        Schema::dropIfExists('customer_orders');
    }
}
