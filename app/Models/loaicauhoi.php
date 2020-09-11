<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loaicauhoi extends Model
{
    //

     protected $table = 'loaicauhoi';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten'  
    ];
    public $timestamps = false;
}
