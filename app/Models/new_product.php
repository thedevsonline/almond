<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_product extends Model
{
    use HasFactory;
     protected $fillable = [
                'product_name',
                'short_discription',
                'long_discription',
                'product_price',
                'stock',
                'reviews',
                'review_user_id',
                'image',
                'image1',
                'image2',
                'image3',
                'image4',
                'image5',
                'image6',
                'lenght',
                'height',
                'weight',
                'width',
                'category',
                'categoryid',
                'price',
                'sellPrice',
                'sell%',
                'rating',
                'facebooklink',
                'googlelink',
                'whatsapp',
                'payment_method',
                'deliver_method',
                'minmum_sell',
                'sellerid',
                'product_image',
                'imageid',
                'product_category',
                'totalprice'
];




}
