<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiVanBan extends Model
{
    protected $table = 'loaivanban';
    public $timestamps = false;
    protected $fillable = [
        'tenloaivb',
        'slug',
    ];

    public function vanban(){
        return $this->hasMany(VanBan::class, 'id_linhvuc');
    }
}
