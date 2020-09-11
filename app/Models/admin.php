<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //

     protected $table = 'admin';

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
