<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'id_num','passport','file','enter_year','name','username','password','first_name','father_name','grandfather_name','family_name','arabic_name','gender','born_date','born_place','arabic_born_place','adress','phone','mobile','email','nation','semester','class','ex_school','arabic_ex_school','enter_date','father_account','mother_account','image','reports','login','welcome',
    ];


    public function genders(){

    	return $this->hasOne('App\Genders','id', 'gender');
    }
    public function nations(){

    	return $this->hasOne('App\Nations','id', 'nation');
    }

    public function semesters(){

    	return $this->hasOne('App\Semesters','id', 'semester');
    }

    public function enteryears(){

    	return $this->hasOne('App\Enteryears','id', 'enter_year');
    }

    public function classes(){

    	return $this->hasOne('App\Classes','id', 'class');
    }

}
