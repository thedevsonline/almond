<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('userName');
            $table->string('phone');
            $table->string('address');
            $table->string('string');
            $table->string('sellerid')->nullable();
            $table->string('business_name');
            $table->string('city');
            $table->string('province');
            $table->string('delivery_chargers');
            $table->string('payment_status');
            $table->string('userid');
            $table->string('product_name')->default(Null);
            $table->string('productid')->default(Null);
            $table->string('price');
            $table->string('quantity');
            $table->string('image');
            $table->string('role');

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
};
