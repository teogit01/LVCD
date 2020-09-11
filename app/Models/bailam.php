<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bailam extends Model
{
    //

     protected $table = 'bailam';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten',
     	'tongdiem' 
    ];
    public $timestamps = false;
}
