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
        Schema::create('new_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->default('null');
            $table->string('short_discription')->nullable();
            $table->longText('long_discription')->nullable();
            $table->string('product_price')->default('00');
            $table->string('stock')->nullable('00');
            $table->string('reviews')->nullable();
            $table->string('review_user_id')->nullable();
            $table->string('iamge')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('lenght')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('width')->nullable();
            $table->string('category')->nullable();
            $table->string('categoryid')->nullable();
            

            $table->string('price')->nullable();
            $table->string('sellPrice')->nullable();
            $table->string('sell%')->nullable();
            $table->string('rating')->nullable();
            $table->string('facebooklink')->nullable();
            $table->string('googlelink')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('payment_method')->default('cash on delivery');
            $table->string('deliver_method');
            $table->string('minmum_sell')->default('1');
            $table->string('sellerid')->default('1');
            $table->string('product_image')->default('default.jpg');
            $table->string('imageid')->nullable();
            $table->string('product_category')->default('uncategorized');
            $table->string('totalprice')->nullable();
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
        Schema::dropIfExists('new_products');
    }
};
