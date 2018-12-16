<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kcoachs extends Model
{
   protected $fillable = [
        'id_num','name','username','password','first_name','father_name','grandfather_name','family_name','gender','born_date','born_place','adress','phone','mobile','email','section','nation','image',
    ];

     public function genders(){

    	return $this->hasOne('App\Genders','id', 'gender');
    }
    public function nations(){

    	return $this->hasOne('App\Nations','id', 'nation');
    }
}
