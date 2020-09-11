<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thisinh extends Model
{
    //

     protected $table = 'thisinh';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'tendangnhap',
     	'matkhau',
     	'hoten',
     	'gmail',
     	'sodienthoai'
    ];
    public $timestamps = false;
}
