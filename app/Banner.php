<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=
        [
          'title',
          'content1',
          'content2',
          'file',
            'button',
            'path'
        ];
}
