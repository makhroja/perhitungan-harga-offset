<?php

namespace App\Model\Banner;

use Illuminate\Database\Eloquent\Model;

class BannerMaterial extends Model
{
    protected $table = 'banner_materials';

    protected $fillable = array('name', 'price', 'created_at', 'updated_at');
}
