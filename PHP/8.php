<?php
 $myvar=35;
function function1()
{
  global $myvar;
	echo "bbb",$myvar;
}

function1();
?>