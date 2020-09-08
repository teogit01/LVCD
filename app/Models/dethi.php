<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dethi extends Model
{
    //

     protected $table = 'dethi';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten'  
    ];
    public $timestamps = false;
}
