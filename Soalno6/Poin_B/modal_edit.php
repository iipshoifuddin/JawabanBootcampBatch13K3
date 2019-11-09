<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data </h4>
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