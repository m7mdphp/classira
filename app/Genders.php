<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    protected $fillable = [
        'name','id',
    ];


     public function guardians(){

    	return $this->belongsTo('App\Guardians','gender');
    }

    public function students(){

    	return $this->belongsTo('App\Students','gender');
    }

    public function teachers(){

    	return $this->belongsTo('App\Teachers','gender');
    }
        public function admins(){

        return $this->belongsTo('App\Admins','gender');
    }
        public function supervisors(){

        return $this->belongsTo('App\Supervisors','gender');
    }
        public function kcoachs(){

        return $this->belongsTo('App\Kcoachs','gender');
    }
}
