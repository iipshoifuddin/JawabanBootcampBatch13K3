<?php
	include "koneksi.php";
	$id=$_POST['id'];
	$cashier = $_POST['cashier'];
	$product = $_POST['nameproduct'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$namap=$product;
	$sql="UPDATE `tb_product` SET  `name` = '$product', `price` = '$price', `id_category` = '$category', `id_cashier` = '$cashier' WHERE `tb_product`.`id` ='$id';";

	$modal=mysqli_query($koneksi,$sql);
?>

<script type="text/javascript">
	window.location.assign("index.php?msg=2&&nama=<?php echo $namap ?>");
</script>