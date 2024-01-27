<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTinTuc extends Model
{
    protected $table = 'loaitintuc';
    public $timestamps = false;
    protected $fillable = [
        'tenloaitt',
        'slug',
    ];

    public function tintuc(){
        return $this->hasMany(TinTuc::class, 'id_loaitt');
    }
}
