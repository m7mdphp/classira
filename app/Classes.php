<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'name','id',
    ];


     public function students(){

    	return $this->belongsTo('App\Students','class');
    }
}
