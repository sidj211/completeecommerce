<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{

    protected $fillable=[
        'file'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected $uploads = '/images/';
    public function getFileAttribute($photo)
    {
        return $this->uploads.$photo;
    }






}
