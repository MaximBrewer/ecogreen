<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBillingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_status', function (Blueprint $table) {
            $table->boolean('default')->nullable()->default(false);
        });
        Schema::create('order_shipping_types', function (Blueprint $table) {
            $table->id();
            $table->string('shipping_type');
            $table->boolean('default')->nullable()->default(false);
            $table->timestamps();
        });
        Schema::create('order_payment_types', function (Blueprint $table) {
            $table->id();
            $table->string('payment_type');
            $table->boolean('default')->nullable()->default(false);
            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table){
            $table->dropColumn('billing_type');
            $table->bigInteger('shipping_type_id')->unsigned();
            $table->dropColumn('payment_type');
            $table->bigInteger('payment_type_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_billing_types');
        Schema::dropIfExists('order_payment_types');
    }
}
