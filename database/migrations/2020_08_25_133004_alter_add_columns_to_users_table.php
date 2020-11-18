<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->integer('phone')->unsigned()->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('city')->nullable();
            $table->integer('inn')->unique()->nullable();
            $table->string('name_organization')->nullable();
            $table->boolean('is_active')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('billing_address');
            $table->dropColumn('city');
            $table->dropColumn('inn');
            $table->dropColumn('name_organization');
            $table->dropColumn('is_active');
        });
    }
}
