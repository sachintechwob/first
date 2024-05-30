
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Layout -->
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Invitations</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/create_invitations'); ?>">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Name</label>
                          <input type="text" class="form-control" name="name" id="basic-default-fullname" placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Price</label>
                          <input type="text" class="form-control" name="price" id="basic-default-company" placeholder="Price" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Image</label>
                          <input type="file" class="form-control" name="image" id="image" name="image"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">GIF Image</label>
                          <input type="file" class="form-control" name="gif_image" id="gif_image" name="gif_image"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Video</label>
                          <input type="file" class="form-control" name="video" id="video" name="video"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Description</label>
                          <textarea id="basic-default-message" name="description" class="form-control" placeholder="Details description"
                          ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
           

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
