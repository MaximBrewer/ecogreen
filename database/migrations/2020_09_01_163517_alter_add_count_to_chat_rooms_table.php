<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddCountToChatRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat_room', function (Blueprint $table) {
            $table->unsignedInteger('admin_new_count')->nullable()->default(0);
            $table->unsignedInteger('user_new_count')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_room', function (Blueprint $table) {
            $table->dropColumn('admin_new_count');
            $table->dropColumn('user_new_count');
        });
    }
}
