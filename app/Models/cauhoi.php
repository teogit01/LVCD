<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    //

     protected $table = 'cauhoi';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten',
     	'loaicauhoi_ma' 
    ];
    public $timestamps = false;
}
