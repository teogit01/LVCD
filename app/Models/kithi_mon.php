<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kithi_mon extends Model
{
    //

     protected $table = 'kithi_mon';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'kithi_ma',
     	'mon_ma'
    ];
    public $timestamps = false;
}
