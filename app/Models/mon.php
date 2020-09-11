<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mon extends Model
{
    //

     protected $table = 'mon';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten',
     	'phieudangky_ma' 
    ];
    public $timestamps = false;
}
