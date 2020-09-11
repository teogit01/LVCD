<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cauhoi_de extends Model
{
    //

     protected $table = 'cauhoi_de';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
    	'id',
     	'cauhoi_ma',
     	'bailam_ma'
    ];
    public $timestamps = false;
}
