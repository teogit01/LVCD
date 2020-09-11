<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phuongan extends Model
{
    //

     protected $table = 'phuongan';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten',
     	'noidung'
    ];
    public $timestamps = false;
}
