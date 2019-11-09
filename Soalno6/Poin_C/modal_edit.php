<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data </h4>
        </div>

        <div class="modal-body">

          <?php
    include "koneksi.php";
  $modal_id=$_GET['modal_id'];
  $sql="SELECT * FROM `tb_product` WHERE id='$modal_id'";
  $modal=mysqli_query($koneksi,$sql);
  while($r=mysqli_fetch_array($modal)){ ?>
          <form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>">
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
                  <input type="text" name="price"  class="form-control" placeholder="Rp. <?php echo number_format($r[2],0,',','.') ?>" required/>
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
              <?php } ?>  
           

            </div>

           
        </div>
    </div>
</div>