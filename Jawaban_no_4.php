<?php

function printWords($data)
{
	$huruf_vokal=array("A","E","I","O","U");
	$huruf_konsonan=array("B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","x","Y","Z");
	for($i=0;$i<strlen($data); $i++)
	{
		$data2[$i]=substr($data, $i,1);
	}

	foreach ($data2 as $key => $value) 
	{

		foreach ($huruf_vokal as $key_index => $value_index) 
		{
			//echo "<>".$value_index;
			$posisi=strpos($value,$value_index);
			if($posisi!==false)
			{
				
				$new_data[]=$value;
			}
		}

	}	
	
	foreach ($data2 as $key => $value) 
	{

		foreach ($huruf_konsonan as $key_index => $value_index) 
		{
			//echo "<>".$value_index;
			$posisi=strpos($value,$value_index);
			if($posisi!==false)
			{
				
				$new_data[]=$value;
			}
		}

	}
	
	for($i=0; $i<count($new_data); $i++)
	{
		echo $new_data[$i]."<br />";

	}
}

echo printWords("ARKADEMY");
?>