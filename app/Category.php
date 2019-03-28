<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }

    public function crproducts()
    {
        return $this->hasMany(Product::class);
    }

    public function photo(){
        return $this->belongsTo(ProductImg::class);
    }


    protected $fillable=[
        'name','photo_id'
    ];
}
