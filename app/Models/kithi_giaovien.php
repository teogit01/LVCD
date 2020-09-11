<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kithi_giaovien extends Model
{
    //

     protected $table = 'kithi_giaovien';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'kithi_ma',
     	'nguoidung_tendangnhap'
    ];
    public $timestamps = false;
}
