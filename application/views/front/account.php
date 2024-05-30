
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
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>Orders</h1>
            <div class="content-page">
                <table class="table">
                    <thead>
                      <th>Sr</th>
                      <th>Order Number</th>
                      <th>Name</th>
                      <th>Order Status</th>
                      <th>Address</th>
                      <th>Date</th>
                    </thead>
                    <tbody>
                      <?php if($orders){ $i = 1; foreach($orders as $order ){
                        $date = date("d-m-Y", strtotime($order['created_date']));
                        $odate = date("dmY", strtotime($order['created_date']));
                       ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><a href="<?php echo base_url('invite/order_details/'.base64_encode($order['id'])); ?>"><?php echo 'ORD-'.$odate.$order['id']; ?></a></td>
                        <td><a href="<?php echo base_url('invite/order_details/'.base64_encode($order['id'])); ?>"><?php echo ucwords($order['fullname']); ?></a></td>
                        <td><a href="<?php echo base_url('invite/order_details/'.base64_encode($order['id'])); ?>"><?php echo $order['order_status']; ?></a></td>
                        <td><?php echo $order['address1'] .' '. $order['address2']; ?></td>
                        <td><?php echo $date; ?></td>
                      </tr>
                    <?php $i++ ; } } ?>
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