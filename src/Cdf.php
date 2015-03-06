<?php namespace datemodify;

class Cdf{
	//use for facebook date to sql datetime
	//from 10/08/1990 to 1990-08-10
	public static function convert_date_dmy_2_ymd($mdate){
		$expdate = explode('/', $mdate);
		$result = $expdate[2].'-'.$expdate[0].'-'.$expdate[1];
		return $result;
	}
	
	//use for http://www.eyecon.ro/bootstrap-datepicker/
	//from 08/10/1990 to 1990-08-10
	public static function convert_date_mdy_2_ymd($mdate){
		$expdate = explode('/', $mdate);
		$result = $expdate[2].'-'.$expdate[1].'-'.$expdate[0];
		return $result;
	}

	//more convertion soon...
}
