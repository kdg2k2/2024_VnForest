<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
    protected $table = 'vanban';
    protected $fillable = [
        'id_loaivb',
        'id_linhvuc',
        'id_user',
        'slug',
        'tenvb',
        'sohieu',
        'namphathanh',
        'donviphathanh',
        'path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function linhvuc()
    {
        return $this->belongsTo(LinhVuc::class, 'id_linhvuc');
    }

    public function loaivb()
    {
        return $this->belongsTo(LoaiVanBan::class, 'id_loaivb');
    }
}
