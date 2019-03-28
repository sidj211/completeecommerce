<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    //
    public function footerInfo()
    {
        return $this->hasMany(FooterInfo::class,'FooterSetting_id');
    }

    public function extraInfo(){
        return $this->hasMany(FooterExtra::class,'FooterSetting_id');
    }

    public function MyAccountInfo()
    {
        return $this->hasMany(FooterMyAccount::class,'FooterSetting_id');
    }

}
