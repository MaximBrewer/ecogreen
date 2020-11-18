<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chat_room_id')->unsigned();
            $table->foreign('chat_room_id')->references('id')->on('chat_room')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->text('message');
            $table->bigInteger('reply_message_id')->unsigned()->nullable();
            $table->foreign('reply_message_id')->references('id')->on('messages')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status',['NEW', 'VIEWED'])->default('NEW');
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
        Schema::dropIfExists('messages');
    }
}
