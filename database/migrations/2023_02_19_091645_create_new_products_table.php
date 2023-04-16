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
            $table->string('product_name')->default(null);
            $table->string('short_discription')->default(null);
            $table->longText('long_discription')->default(null);
            $table->decimal('product_price')->default('00');
            $table->string('stock')->default(null);
            $table->string('reviews')->default(null);
            $table->string('review_user_id')->default(null);
            $table->string('iamge')->default(null);
            $table->string('image1')->default(null);
            $table->string('image2')->default(null);
            $table->string('image3')->default(null);
            $table->string('image4')->default(null);
            $table->string('image5')->default(null);
            $table->string('image6')->default(null);
            $table->decimal('lenght')->default(null);
            $table->decimal('height')->default(null);
            $table->decimal('weight')->default(null);
            $table->decimal('width')->default(null);
            $table->string('category')->default(null);
            $table->string('categoryid')->default(null);
            

            $table->decimal('price')->default(null);
            $table->decimal('sellPrice')->default(null);
            $table->decimal('sell%')->default(null);
            $table->string('rating')->default(null);
            $table->string('facebooklink')->default(null);
            $table->string('googlelink')->default(null);
            $table->string('whatsapp')->default(null);
            $table->string('payment_method')->default('cash on delivery');
            $table->string('deliver_method')->default(null);
            $table->string('minmum_sell')->default('1');
            $table->string('sellerid')->default('1');
            $table->string('product_image')->default('default.jpg');
            $table->string('imageid')->default(null);
            $table->string('product_category')->default('uncategorized');
            $table->decimal('totalprice')->default(null);
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
