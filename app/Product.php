<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=[



     'P_name',
     'P_description',
     'P_specification',
     'P_warranty',
     'P_expiry_date',
     'P_manufacture_date',
     'P_quantity',
     'P_cost_price',
     'P_tax_id',
     'P_total_cost',
     'P_mrp',
     'P_retail_price',
     'P_retail_tax_id',
     'P_total_retail_price',
     'P_status',
     'P_condition',
     'P_discount_id',
     'subcategory_id',
        'photo_id',
        'today_deal',

    ];



    /*public function ProductImages()
    {
        return $this->hasMany(ProductImg::class);
    }*/

    public function photo()
    {
        return $this->belongsTo(ProductImg::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
