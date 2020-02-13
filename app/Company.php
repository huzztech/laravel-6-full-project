<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    public function program_test(){
		
		return $this->hasOne('\App\Program');
	}
}
