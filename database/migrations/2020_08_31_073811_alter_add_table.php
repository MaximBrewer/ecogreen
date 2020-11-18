<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chemicals',function(Blueprint $table){
            $table->dropColumn('is_chemical');
        });
        Schema::create('active_substance',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->timestamps();
        });
        Schema::table('products',function (Blueprint $table){
            $table->bigInteger('active_substance_id');
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
