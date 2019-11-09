
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
    <thead style="background: #CECECE;">
      <th>no</th>
      <th>Cashier</th>
      <th>Product</th>
      <th>Category</th>
      <th>Price</th>
      <th>Action</th>

    </thead>

  <tr>
      <td>1</td>
      <td>Pevita Pearce</td>
      <td>Latte</td>
      <td>Drink</td>
      <td>Rp. 10.000</td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
  <tr>
      <td>2</td>
      <td>Raisa Andriana </td>
      <td>Cake</td>
      <td>Food</td>
      <td>Rp. 15.000</td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
  <tr>
      <td>3</td>
      <td>Raisa Andriana </td>
      <td>Fred Rice</td>
      <td>Food</td>
      <td>Rp. 30.000</td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
  <tr>
      <td>4</td>
      <td>Pevita Pearce</td>
      <td>Gudeg</td>
      <td>Food</td>
      <td>Rp. 35.000</td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
    <tr>
      <td>5</td>
      <td>Joko Purwadi</td>
      <td>Ice Tea</td>
      <td>Drink</td>
      <td>Rp. 55.000</td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
  <tr>
      <td>6</td>
      <td>Iip Shoifuddin</td>
      <td>Banana Lekker</td>
      <td>Food</td>
      <td>Rp. 15.000</td>
      <td>

         <a href="#" onclick="confirm_modal('proses_delete.php');"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
          <a href="#" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>
         <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
         </a>
      </td>
  </tr>
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
                  <select name="Cashier"  class="form-control" placeholder="Cashier" required>
                        <option value="10000000">Raisa Andriana</option>
                        <option value="120000000">Pevita Pearce</option>
                        <option value="120000000">Iip Shoifuddin</option>                        
                  </select>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <select name="name"  class="form-control" placeholder="Product Title" required>
                        <option value="volvo">Ice Tea</option>
                        <option value="volvo">Latte</option>
                        <option value="saab">Cacke</option>
                        <option value="saab">Banana Lekker</option>
                  </select>
                </div>


                <div class="form-group" style="padding-bottom: 20px;">
                  <input type="text" name="modal_name"  class="form-control" placeholder="Drink" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <input type="text" name="modal_name"  class="form-control" placeholder="Rp. 10.000" required/>
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
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
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
  swal("Data Raisa Andriana  Ditambahkan ID #1", "Klik OK", "success");
</script>
<?php  
}
elseif(!empty($_GET['msg']) && $_GET['msg']==2)
{
?>
<script type="text/javascript">
  swal("Data Raisa Andriana  Ubah ID #1", "Klik OK", "success");
</script>
<?php
}
elseif(!empty($_GET['msg']) && $_GET['msg']==3)
{
?>
<script type="text/javascript">
  swal("Data Raisa Andriana Hapus ID #1", "Klik OK", "success");
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

  



