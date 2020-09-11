<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    //

     protected $table = 'nguoidung';

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
