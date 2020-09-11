<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class giaovien extends Model
{
    //

     protected $table = 'giaovien';

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
