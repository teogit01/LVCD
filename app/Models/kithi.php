<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kithi extends Model
{
    //
    
      protected $table = 'kithi';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'ma',
     	'ten'  
    ];
    public $timestamps = false;

}
