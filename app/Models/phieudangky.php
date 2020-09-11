<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phieudangky extends Model
{
    //

     protected $table = 'phieudangky';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten',
     	'bailam_ma',
     	'nguoidung_tendangnhap'
    ];
    public $timestamps = false;
}
