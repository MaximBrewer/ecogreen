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
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('logo');
            $table->text('description');
            $table->string('formulation');
            $table->string('chemical_class');
            $table->string('active_substance');
            $table->float('concentration');
            $table->string('hazard_class');
            $table->string('reg_number');
            $table->date('end_of_reg');
            $table->integer('discount')->nullable();
            $table->boolean('is_xit');
            $table->boolean('is_new');
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
