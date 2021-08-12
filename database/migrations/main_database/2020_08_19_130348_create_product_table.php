<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('size');
            $table->string('color');
            $table->string('material')->nullable();
            $table->string('weight')->nullable();
            $table->string('guarantee')->nullable();
            $table->decimal('price', 13, 2)->nullable();
            $table->BigInteger('stock')->nullable()->default('0');
            $table->string('slug')->unique();
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->boolean('featured')->default(0);
            $table->foreign('image_id')->references('id')->on('image')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('category')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('product');
    }
}
