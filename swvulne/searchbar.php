<?php

	if($_POST['search']=="book")
	{
		echo "book";
	}
	elseif($name = preg_replace( '/<(.)s(.)c(.)r(.)i(.)p(.)t/i', ' ', $_POST[ 'search' ] ))
	{
		echo "$name";	
	}
    else
	{
		echo "Invalid Input";
	}
	
?>