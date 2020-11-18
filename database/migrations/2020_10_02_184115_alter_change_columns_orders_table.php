<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterChangeColumnsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('billing_subtotal');
            $table->dropColumn('billing_taxi');
            $table->unsignedDouble('billing_total')->notNull();
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->unsignedDouble('subtotal')->nullable();
            $table->unsignedDouble('nds_price')->nullable();
            $table->unsignedDouble('sale_price')->nullable();
            $table->unsignedSmallInteger('discount')->nullable();
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
