<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
     protected $fillable = [
        'name','id',
    ];


     public function admins(){

    	return $this->belongsTo('App\Admins','school');
    }
}
