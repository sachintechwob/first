          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header"><a href="<?php echo base_url('admin/orders') ?>"><button class="btn btn-primary">Back To Orders</button></a> <br><br>Orders Details</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php if($orders){ $i = 1;
                        $total = 0;
                       foreach($orders as $row){ 
                          $total +=  $row['price']* $row['qty'];

                        ?>
                        <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo ucfirst($row['name']); ?></td>
                        <td><img height="50px" width="50px" src="<?php echo base_url('uploads/'.$row['image']); ?>"></td>
                        <td><?php echo '$'.$row['price']; ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo '$'.$row['price'] * $row['qty']; ?></td>
                       
                      </tr>
                    <?php $i++; } ?>
                        <tr>
                          <td colspan="4"></td>
                          <td >Total</td>
                          <td><?php echo '$'.$total; ?></td>
                        </tr>

                    <?php  } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
              <hr class="my-5" />

              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

  <?php $this->load->view('admin/footer'); ?>
  </body>
</html>
   
