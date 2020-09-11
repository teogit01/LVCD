<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dapan extends Model
{
    //

     protected $table = 'dapan';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten',
     	'cauhoi_ma' 
    ];
    public $timestamps = false;
}
