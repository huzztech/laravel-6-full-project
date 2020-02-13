<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //

    public function program_test(){
		
		return $this->hasOne('\App\Program');
	}
}
