<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupon');
            $table->string('amount');
            $table->string('cust_id');
            $table->string('distributor_id');
            $table->string('is_delivered')->default(0);
            $table->timestamps();
        });
    }

    /**c
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_transactions');
    }
}
