<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\DBAL\Types\Type;

class AlterChangeColumnsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if (!Type::hasType('double')) {
//            Type::addType('double', FloatType::class);
//        }
//        Schema::table('orders', function (Blueprint $table) {
//            $table->unsignedDouble('billing_total',20,2)->change();
//            $table->unsignedDouble('billing_nds_total',12,2)->change();
//        });
//        Schema::table('order_items', function (Blueprint $table) {
//            $table->unsignedDouble('price',12,2)->change();
//            $table->unsignedDouble('subtotal',20,2)->change();
//            $table->unsignedDouble('nds_price',12,2)->nullable()->change();
//            $table->unsignedDouble('sale_price',12,2)->nullable()->change();
//        });
        Schema::table('orders', function (Blueprint $table) {
            $table->string('billing_total')->change();
            $table->string('billing_nds_total')->change();
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->string('price')->change();
            $table->string('subtotal')->change();
            $table->string('nds_price')->nullable()->change();
            $table->string('sale_price')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
