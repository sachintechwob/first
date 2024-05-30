
    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Orders</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Change Password</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Wish list</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Returns</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>Orders Details</h1>
            <div class="content-page">
                <table class="table">
                    <thead>
                      <th>Sr</th>
                      <th>Product Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php if($orders){ $i = 1; $totalAmount = 0; foreach($orders as $order ){

                       $totalAmount +=  $order['price'] * $order['qty'];
                       ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo ucwords($order['name']); ?></td>
                        <td><img height="50px" width="50px" src="<?php echo base_url('uploads/'.$order['image']); ?>"></td>
                        <td><?php echo '$'.$order['price']; ?></td>
                        <td><?php echo $order['qty']; ?></td>
                        <td><?php echo '$'.$order['price'] * $order['qty']; ?></td>
                      </tr>
                    <?php $i++ ; } ?>
                      <tr>
                        <td colspan="4"></td>
                        <td><strong>Total Amount</strong></td>
                        <td><?php echo '$'.$totalAmount; ?></td>
                      </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

<?php $this->load->view('front/footer'); ?>
  </body>
<!-- END BODY -->
</html>