<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFooterBodyToContentMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_menus', function (Blueprint $table) {
            $table->longText('body_footer')->nullable()->comment('Only for about_us page!');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_menus', function (Blueprint $table) {
            $table->dropColumn('body_footer');
        });
    }
}
