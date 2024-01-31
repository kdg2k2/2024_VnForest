<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioiThieuChung extends Model
{
    protected $table = 'gioithieuchung';
    public $timestamps = false;
    protected $fillable = [
        'tieude',
        'noidung',
    ];
}
