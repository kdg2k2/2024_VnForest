<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';
    protected $fillable = [
        'id_loaitt',
        'id_user',
        'slug',
        'tentt',
        'noidung',
        'path',
        'view',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function loaitt()
    {
        return $this->belongsTo(LoaiTinTuc::class, 'id_loaitt');
    }
}
