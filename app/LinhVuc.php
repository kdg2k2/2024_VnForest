<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{
    protected $table = 'linhvuc';
    public $timestamps = false;
    protected $fillable = [
        'tenlinhvuc',
        'slug',
    ];

    public function vanban(){
        return $this->hasMany(VanBan::class, 'id_linhvuc');
    }
}
