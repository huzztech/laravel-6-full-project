<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;


class Program extends Model
{
    //

	protected $primaryKey = 'wid';

    protected $fillable = [

    	"etm_code", "change_by", "seller_id", "set_date", "code", "customer", "unit", "warp_count", "warp_yarn_type", "warp_yarn_blend", "weft1_count", "weft1_yarn_type", "weft1_yarn_blend", "weft2_count", "weft2_yarn_type", "weft2_yarn_blend", "weft3_count", "weft3_yarn_type", "weft3_yarn_blend", "weft4_count", "weft4_yarn_type", "weft4_yarn_blend", "w_end", "w_pick", "w_width", "w_fabric_type", "w_selvedge", "w_writing", "remarks",
    ];


    public function company_fun(){
		
		return $this->belongsTo('\App\Company', 'customer');
	}


	public function unit_fun(){
		
		return $this->belongsTo('\App\Unit', 'unit');
	}
    

}
