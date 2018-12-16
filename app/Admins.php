<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
   protected $fillable = [
        'id_num','name','username','password','group','first_name','father_name','grandfather_name','family_name','arabic_name','gender','born_date','born_place','adress','phone','mobile','email','login','nation','school',
    ];

    public function genders(){

    	return $this->hasOne('App\Genders','id', 'gender');
    }
    public function nations(){

    	return $this->hasOne('App\Nations','id', 'nation');
    }

    public function schools(){

    	return $this->hasOne('App\Schools','id', 'school');
    }
     public function groups(){

    	return $this->hasOne('App\Groups','id', 'group');
    }
}


