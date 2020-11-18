<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('order_status')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_type_id')->references('id')->on('order_payment_types')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('shipping_type_id')->references('id')->on('order_shipping_types')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
//            $table->dropIndex(['status_id','payment_type_id','shipping_type_id']);
        });
    }
}
