
<?php
include "koneksi.php";
$cashier = $_POST['cashier'];
$product = $_POST['nameproduct'];
$category = $_POST['category'];
$price = $_POST['price'];
$namap=$product;
mysqli_query($koneksi,"INSERT INTO `tb_product` (`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES ('', '$product', '$price', '$category', '$cashier');");
?>

<script type="text/javascript">
	window.location.assign("index.php?msg=1&&nama=<?php echo $namap?>");
</script>