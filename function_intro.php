<?php

function result_to_gpa($mark,$subject)
{  
	$gpa = 0;
	if($mark>=80)
	   $gpa = 5.00;

	else if($mark>=70 AND $mark<80)
		$gpa = 4.00;

	else if($mark>=60 AND $mark<70)
		$gpa = 3.50;

	else if($mark>=50 AND $mark<60)
	    $gpa = 3.00;

	else if($mark>=40 AND $mark<50)
	    $gpa = 2.00;

	else if($mark>=33 AND $mark<40)
	    $gpa = 1.00;

   echo "{$subject}(GPA) : $gpa <br/>";

}


result_to_gpa(70,'Bangla');

result_to_gpa(75,'English');

result_to_gpa(65,'Math');

?>