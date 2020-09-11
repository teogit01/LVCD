<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thongbao extends Model
{
    //

     protected $table = 'thongbao';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ten',
     	'noidung',
     	'ngaydang',
     	'nguoidung_tendangnhap'
    ];
    public $timestamps = false;
}
