<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Orders List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php if($orders){ $i = 1; foreach($orders as $row){ ?>
                        <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo ucwords($row['fullname']); ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['address1'] .' '.$row['address2'] .' '.$row['city'] .' '.$row['country'] .' '.$row['postcode']; ?></td>
                        <td>
                          <select rowId="<?php echo $row['id']; ?>"  class="orderStatus">
                              <option value="Process" <?php if($row['order_status']== "Process"){ echo "selected"; } ?>>Process</option>
                              <option value="Accept" <?php if($row['order_status']== "Accept"){ echo "selected"; } ?>>Accept</option>
                              <option value="Reject" <?php if($row['order_status']== "Reject"){ echo "selected"; } ?>>Reject</option>
                              <option value="Complete" <?php if($row['order_status']== "Complete"){ echo "selected"; } ?>>Complete</option>
                          </select>
                        </td>
                        <td>
                          <a href="<?php echo base_url('admin/order_details/'.base64_encode($row['id'])); ?>">View Details </a>
                        </td>  
                      </tr>
                    <?php $i++; } } ?>
                      
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
  <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
  <script type="text/javascript">
    let table = new DataTable('.table', {
        responsive: true
    });

    $(document).on('change', ".orderStatus", function () {
      const id = $(this).attr("rowId");
      const status = $(this).val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url('admin/change_order_status'); ?>",
          data: {'id': id,status: status}
        }).done(function (msg) {
                
        });        
    })

  </script>
  </body>
</html>
   
