<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nations extends Model
{
    protected $fillable = [
        'name','id',
    ];




        public function guardians(){

    	return $this->belongsTo('App\Guardians','nation');
    }

    public function students(){

    	return $this->belongsTo('App\Students','nation');
    }

    public function teachers(){

    	return $this->belongsTo('App\Teachers','nation');
    }
     public function admins(){

        return $this->belongsTo('App\Admins','nation');
    }
        public function supervisors(){

        return $this->belongsTo('App\Supervisors','nation');
    }
        public function kcoachs(){

        return $this->belongsTo('App\Kcoachs','nation');
    }
}
