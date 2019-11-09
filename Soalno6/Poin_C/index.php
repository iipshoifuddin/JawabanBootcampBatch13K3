
<!doctype html>
<html lang="en">
<head>
<title>ARKADMY</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="ZEROO" name="author"/>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/my.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h2 style="color: #FF8FB2; font: bold;"><img src="logo/logo.png"> ARKADEMY <b style="color: black">COFFEE SHOP</b></h2>
            </div>
        </div>
    </div>

<div class="container">
  <p align="right"><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      
<table id="mytable" class="table table-bordered">
    <thead>
      <th>no</th>
      <th>Cashier</th>
      <th>Product</th>
      <th>Category</th>
      <th>Price</th>
      <th>Action</th> 
    </thead>
<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $sql="SELECT tb_cashier.name, tb_product.name, tb_category.name, tb_product.price,tb_product.id FROM tb_product LEFT JOIN (tb_category, tb_cashier) ON (tb_category.id=tb_product.id_category AND tb_cashier.id=tb_product.id_cashier) WHERE 1";
  $modal=mysqli_query($koneksi,$sql);
  while($r=mysqli_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r[0] ?></td>
      <td><?php echo $r[1] ?></td>
      <td><?php echo $r[2] ?></td>
      <td>Rp. <?php echo number_format($r[3],0,',','.') ?></td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php?modal_id=<?php echo  $r[4]; ?>&&nama=<?php echo $r[1] ?>');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r[4]; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
<?php
}
?>

</table>

</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data </h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <select name="cashier"  class="form-control" placeholder="Cashier" required>
                        <option value="2">Raisa Andriana</option>
                        <option value="1">Pevita Pearce</option>
                        <option value="3">Iip Shoifuddin</option>                        
                  </select>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <select name="nameproduct"  class="form-control" placeholder="Product Title" required>
                        <option value="Ice Tea">Ice Tea</option>
                        <option value="Latte">Latte</option>
                        <option value="Cacke">Cacke</option>
                        <option value="Banana Lekker">Banana Lekker</option>
                  </select>
                </div>


                <div class="form-group" style="padding-bottom: 20px;">
                  <select name="category"  class="form-control" placeholder="Product Title" required>
                        <option value="2">Drink</option>
                        <option value="1">Food</option>              
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <input type="text" name="price"  class="form-control" placeholder="Rp. 10.000" required/>
                </div>


                <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete Field ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {modal_id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--PHP LOGIC -->

<?php
  if(!empty($_GET['msg']) && $_GET['msg']==1)
  {
?>
<script type="text/javascript">
  swal("Menu  <?php echo $_GET['nama']; ?> Berhasil ditambahkan", "Klik OK", "success");
</script>
<?php  
}
elseif(!empty($_GET['msg']) && $_GET['msg']==2)
{
?>
<script type="text/javascript">
  swal("Menu  <?php echo $_GET['nama']; ?> Berhasil diubah", "Klik OK", "success");
</script>
<?php
}
elseif(!empty($_GET['msg']) && $_GET['msg']==3)
{
?>
<script type="text/javascript">
  swal("Menu  <?php echo $_GET['nama']; ?> ID #<?php echo $_GET['id']; ?> Berhasil dihapus", "Klik OK", "success");
</script>
<?php
}
else
{
  return 0;
}
?>


</body>
</html>

  



