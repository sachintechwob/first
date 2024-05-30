          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><a href="<?php echo base_url('admin/add_invitations'); ?>"> <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="bx bx-plus me-sm-1"></i> Add Invitations</span></button></a> </h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Invitations</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>GIF Image</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php if($lists){ $i = 1; foreach($lists as $row){ ?>
                        <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><img style="height: 50px" width="50px" src="<?php echo base_url('uploads/'.$row['gif_image']); ?>"></td>
                        <td><img style="height: 50px" width="50px" src="<?php echo base_url('uploads/'.$row['image']); ?>"></td>
                        <td>
                          <a href="<?php echo base_url('admin/update_invitations/'.$row['id']); ?>">Edit </a>
                          <a href="<?php echo base_url('admin/delete_invitations/'.$row['id']); ?>">Delete</a>
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
  </body>
</html>
   
