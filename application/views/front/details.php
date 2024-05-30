    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-7 col-sm-6">
                  <div class="product-main-image">
                    <video width="420" height="300" controls controlsList="nodownload">
                        <source src="<?php echo base_url('uploads/'.$details->video); ?>" type="video/mp4">
                        <source src="<?php echo base_url('uploads/'.$details->video); ?>" type="video/ogg">
                    </video>
                  </div>
                </div>
                <div class="col-md-5 col-sm-6">
                 <div>
                    <h3 class="titleName"><?= $details->name; ?></h3>
                    <div class="edit-section">
                        <div class="content price-div pricebtn">₹<?= $details->price; ?></div>
                        <div class="content edit-btn">Customize</div>
                    </div>
                  </div>
                  <div style="margin-top: 20px;">
                    <?= $details->description; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
            <div class="row">
              <?php foreach ($invitations as $invitation) { ?>
                  <div class="col-sm-6 col-md-3 col-xl-3 col-12">
                      <div class="mainBox">
                          <div class="box">
                              <div class="video-card thumbnail">
                                  <a href="<?php echo base_url(''); ?>details/<?= $invitation->id; ?>">
                                      <span class="pay-icon"></span>
                                      <img class="mainImg" height="160px" width="630px" src="<?php echo base_url(''); ?>uploads/<?= $invitation->image; ?>">
                                      <img style="display: none" class="gifImage" height="160px" width="630px" src="<?php echo base_url(''); ?>uploads/<?= $invitation->gif_image; ?>">
                                  </a>
                              </div>
                              <div>
                                  <p class="display-name"><a style="color: #000;" href="<?php echo base_url(''); ?>details/<?= $invitation->id; ?>"><?= $invitation->name; ?></a></p>
                              </div>
                              <div class="edit-section">
                                  <div class="content price-div">₹<?= $invitation->price; ?></div>
                                  <div class="content edit-btn right-position"><a style="color: #fff;" href="<?php echo base_url(''); ?>details/<?= $invitation->id; ?>">Edit Video</a></div>
                              </div>
                              <div class="edit-section">
                                  <div class="content  price-div">0 Photos</div>
                                  <div class="content right-position">0 Views</div>
                              </div>
                          </div>
                      </div>
                          
                  </div>
              <?php } ?>
              </div>
          </div>
      </div>
    </div>

    <?php $this->load->view('front/footer'); ?>

   </body>
<!-- END BODY -->
</html>