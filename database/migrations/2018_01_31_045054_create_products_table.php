<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->integer('cat_id');
          $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
          $table->string('pro_name');
          $table->integer('pro_price');
          $table->integer('pro_quantity');
          $table->decimal('pro_discount');
          $table->string('pro_description');
          $table->string('pro_status')->default('active');

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
