<?php

function username($name)
{
	$uppercase = preg_match('@[A-Z]@', $name);
	$lowercase = preg_match('@[a-z]@', $name);
	$number    = preg_match('@[0-9]@', $name);
	$spesial   = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", $name);
	if($uppercase || !$lowercase || $number || strlen($name)<5 || $spesial)
	{
	    return 0; //bisa diganti dengan "false"
	}else
	{
	    return 1; //bisa diganti dengan "true"
	    
	}
}


function password($user)
{
	$must_at_or_and   = preg_match("#[\\@\\&\\\\\\\\]+#", substr($user, 2,1));
	$left_uppercase 			= preg_match('@[A-Z]@', substr($user, 0,2));
	$lowercase			= preg_match('@[a-z]@', substr($user, 0,2));
	$left_number 		= preg_match('@[0-9]@', substr($user, 0,2));
	$left_spesial   = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", substr($user, 0,2));
	$right_uppercase 			= preg_match('@[A-Z]@', substr($user, 3,6));
	$right_number    		= preg_match('@[0-9]@', substr($user, 3,6));
	$right_lowercase= preg_match('@[a-z]@', substr($user, 3,6));
	$right_spesial  = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", substr($user, 3,6));
	if(!$must_at_or_and || strlen($user)!==7 ||  $left_uppercase || $lowercase || !$left_number || $left_spesial || !$right_uppercase || $right_lowercase || $right_number || $right_spesial)
	{
	    return 0; //bisa diganti dengan "false" note: preg_match hanya menghasilkan boolean
	}else
	{
	    return 1; //bisa diganti dengan "true" substr($user, 0,1)==$number || substr($user, 0,1) === $spesial ||
	    
	}
}



 echo password("29&PASS");
 echo password("234&Agan");
 echo username("arkademy");
 echo username("Arkademy");

?>