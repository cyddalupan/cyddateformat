# cyddateformat
Converts, date format

#first add namespace on top
use datemodify\Cdf;

#use for facebook date to sql datetime
$result = Cdf::convert_date_dmy_2_ymd($date_to_convert);

#sample

use datemodify\Cdf;


$date_to_convert = "10/08/1990";

$result = Cdf::convert_date_dmy_2_ymd($date_to_convert);

echo $result;

#more convertion soon...
