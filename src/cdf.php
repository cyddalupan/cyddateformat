<?php namespace cyddateformat;

class cdf{
	//use for facebook date to sql datetime
	//from 10/08/1990 to 1990-08-10
	function convert_date_dmy_2_ymd($mdate){
		$expdate = explode('/', $mdate);
		$result = $expdate[2].'-'.$expdate[0].'-'.$expdate[1];
		return $result;
	}

	//more convertion soon...
}
