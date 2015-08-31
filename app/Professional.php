<?php

namespace Reservations;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $table = 'professionals';
    public $timestamps = true;
    protected $fillable = ['name','email','password','phone_number','address'];

    public function setPasswordAttribute($valor){
    	if (!empty($valor)) {
    		$this->attributes['password'] = \Hash::make($valor);
    	}
    }

}

