<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToSubstanceAndChemicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chemicals', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('active_substance', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chemicals', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('active_substance', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
