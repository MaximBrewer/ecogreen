<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypePackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type_packings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->integer('name')->unsigned();
            $table->double('price', 10, 2);
            $table->double('sale_price', 10, 2)->nullable();
            $table->integer('quantity')->unsigned();
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
        Schema::dropIfExists('product_type_packings');
    }
}
