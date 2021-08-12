<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->nullable();
            $table->BigInteger('segment_id')->nullable();
            $table->string('items_name');
            $table->string('items_code');
            $table->string('type');
            $table->decimal('buy_price', 13, 2)->nullable();
            $table->decimal('sell_price', 13, 2);
            $table->string('input_date');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('stock');
    }
}
