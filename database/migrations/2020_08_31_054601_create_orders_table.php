<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('billing_email')->notNull();
            $table->string('billing_name')->notNull();
            $table->string('billing_address')->notNull();
            $table->string('billing_city')->notNull();
            $table->string('billing_county')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_name_on_card')->nullable();
            $table->string('billing_discount')->nullable();
            $table->string('billing_coupon_code')->nullable();
            $table->integer('billing_subtotal')->nullable();
            $table->integer('billing_taxi')->nullable();
            $table->string('billing_type')->notNull();
            $table->text('notes')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->string('payment_type')->notNull();
            $table->string('payment_getaway')->nullable();
            $table->string('status')->default('Pending');
            $table->string('error')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
