<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('nt_1')->nullable()->default(true)->comment('Sms notify');
            $table->boolean('nt_2')->nullable()->default(true)->comment('New order notify');
            $table->boolean('nt_3')->nullable()->default(true)->comment('Change status order notify');
            $table->boolean('nt_4')->nullable()->default(true)->comment('Chat notify');
            $table->boolean('ml_1')->nullable()->default(true)->comment('Sms mailing');
            $table->boolean('ml_2')->nullable()->default(true)->comment('New order mailing');
            $table->boolean('ml_3')->nullable()->default(true)->comment('Change status order mailing');
            $table->boolean('ml_4')->nullable()->default(true)->comment('Chat mailing');
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
        Schema::table('user_settings', function (Blueprint $table) {
            //
        });
    }
}
