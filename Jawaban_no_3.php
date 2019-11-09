<?php
function thirdHighest($data_array)
{
	if(!is_array($data_array))
	{
		return $a="bukan Array nih";
	}
	if(count($data_array)<3)
	{
		return $a="Minimal array length is 3!";
	}

	for($i=0; $i<count($data_array); $i++)
	{
		if(!is_int($data_array[$i]))
		{
			return 0;
		}
	}

	rsort($data_array);
	
	return $data_array[2];

}

echo thirdHighest([1,2,3,4,5,6]);
//echo "Hasil :".createMatrix(3);



?>