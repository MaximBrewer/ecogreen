<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAllChangeMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_menus',function(Blueprint $table){
            $table->dropColumn('is_chemical');
            $table->dropColumn('is_substance');
        });
        Schema::table('product_type_packings',function(Blueprint $table){
            $table->dropColumn('sale_price');
            $table->dropColumn('price');
        });
        Schema::table('products',function(Blueprint $table){
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
