<pre>
<?php
function createMatrix($ordo_matrix)
{
	if(!is_int($ordo_matrix) && $ordo_matrix!==0)
	{
		return 0;
	}
	$ordo_matrix=abs($ordo_matrix);

	$ordo1=$ordo_matrix;
	$ordo2=$ordo_matrix;
	$elementMatrix=$ordo1*$ordo2;
	$y=0;
	for($x=1; $x<=$elementMatrix; $x++)
	{
		$angka[$y]=$x;
		$y++;
	}

	
	//menampilkan dan memetakan elemen ke dalam matrix masing - masing
	$no=0;
	echo "<table border=0>";
	for($i=1; $i <=$ordo_matrix; $i++){
	      echo "<tr>";
	      for($j=1; $j<=$ordo_matrix; $j++){
	            echo "<td>";
	            $angkabaru[$i][$j]=$angka[$no];
	            echo $angkabaru[$i][$j];	
	            
	            echo "</td>";
	            $no++;
	      }
	}
	echo "</table>";


	//menghitung Jumlah diagonal pertama
	$jumlah_diagonal_p=0;
	$diagonalBaris_p=1;
	$diagonalkolom_p=$ordo_matrix;
	for ($i=1; $i<=$ordo_matrix; $i++)
	{
 	   for ($j=1; $j<=$ordo_matrix; $j++){
 	   		if($i==$diagonalBaris_p && $j==$diagonalkolom_p)
 	   		{
 	   			$jumlah_diagonal_p=$jumlah_diagonal_p+$angkabaru[$diagonalBaris_p][$diagonalkolom_p];
    	    }
    	}
    	$diagonalBaris_p++;
    	$diagonalkolom_p--;
	}

	//menghitung Jumlah diagonal Kedua
	$jumlah_diagonal_k=0;
	$diagonalBaris_k=1;
	$diagonalkolom_k=1;
	for ($i=1; $i<=$ordo_matrix; $i++)
	{
 	   for ($j=1; $j<=$ordo_matrix; $j++){
 	   		if($i==$diagonalBaris_k && $j==$diagonalkolom_k)
 	   		{
 	   			$jumlah_diagonal_k=$jumlah_diagonal_k+$angkabaru[$diagonalBaris_k][$diagonalkolom_k];
    	    }
    	}
    	$diagonalBaris_k++;
    	$diagonalkolom_k++;
	}

	echo "<br /><br />";

	// mengembalikan nilai dari penjumlahan diagonal pertama Dan Diagonal Kedua 
	return $jumlah_diagonal_p+$jumlah_diagonal_k;

}

echo "Hasil :".createMatrix(3);



?>