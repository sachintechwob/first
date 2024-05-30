
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <div class="main">
      <div class="container">
        
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">
              <div id="payment-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" class="accordion-toggle">
                      Checkout
                    </a>
                  </h2>
                </div>
                <div id="payment-address-content" class="panel-collapse">
                  <div class="panel-body row">
                    <form method="post" id="complete_order" class="complete_order" action="<?php echo base_url('invite/complete_order'); ?>">
                    <div class="col-md-6 col-sm-6">
                      <h3>Your Personal Details</h3>
                      <div class="form-group">
                        <label for="firstname">Full Name <span class="require">*</span></label>
                        <input type="text" name="fullname" value="<?php if($this->session->userdata('userName')){ echo $this->session->userdata('userName'); } ?>" id="firstname" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email">E-Mail <span class="require">*</span></label>
                        <input type="text" name="email" value="<?php if($this->session->userdata('userEmail')){ echo $this->session->userdata('userEmail'); } ?>"  id="email" class="form-control email">
                      </div>
                      <div class="form-group">
                        <label for="telephone">Mobile <span class="require">*</span></label>
                        <input type="text" name="mobile" onkeypress="return validateNumber(event)" maxlength="10" id="telephone" class="form-control">
                      </div>
                      <?php if(empty($this->session->userdata('userId'))){ ?>

                      <h3>Your Password</h3>
                      <div class="form-group">
                        <label for="password">Password <span class="require">*</span></label>
                        <input type="password" name="password" required="" id="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="password-confirm">Password Confirm <span class="require">*</span></label>
                        <input type="password" name="confPassword" required="" id="password-confirm" class="form-control">
                      </div>

                       <?php } ?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h3>Your Address</h3>
                      <div class="form-group">
                        <label for="address1">Address 1 <span class="require">*</span></label>
                        <input type="text" name="address1" id="address1" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="address2">Address 2</label>
                        <input type="text" name="address2" id="address2" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="city">City <span class="require">*</span></label>
                        <input type="text" name="city" id="city" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="post-code">Post Code <span class="require">*</span></label>
                        <input type="text" onkeypress="return validateNumber(event)" name="postcode" id="post-code" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="city">Country <span class="require">*</span></label>
                        <input type="text" name="country" id="country" class="form-control">
                      </div>
                    </div>
                    <hr>
                    <h3>Payment Method</h3>
                    <div class="radio-list">
                        <label>
                          <input style="display: inline;" checked type="radio" name="CashOnDelivery" value="CashOnDelivery"> Cash On Delivery
                        </label>
                      </div>
                    <div class="col-md-2">                      
                      <button class="btn btn-primary  pull-right" type="submit" id="button-payment-address">Continue</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- END PAYMENT ADDRESS -->

            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

<?php $this->load->view('front/footer'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/js/validatejs.js'); ?>"></script>
    <script type="text/javascript">

      const userSession = "<?php echo $this->session->userdata("userId"); ?>";

      $(function() {

      


      $(".complete_order").validate({ 
        rules: {
          fullname:{
            required :true
          },
          email: {
              required: true,
              email: true,
              remote: {
                  url: '<?php echo base_url('invite/checkEmail'); ?>',
                  type: 'post',
                  data: {
                      'email': function () { return $('#email').val(); },
                      'userId': function () { return userSession },
                  } 
              }
          },
          mobile: {
            required: true,
            minlength : 10,
          },
          address1:{
            required :true
          },
          city:{
            required :true
          },
          postcode:{
            required : true
          },
          password:{
            required : true
          },
          confPassword:{
            required : true,
            equalTo : "#password"
          },
          country:{
            required :true
          },
        },
        messages: {
          fullname: {
            required: "<span><font color='red'>Please Enter Full Name</font></span>",
          },
          email: {
            required: "<span><font color='red'>Please Enter Email Address</font></span>",
            email: "<span><font color='red'>Please Enter Valid Email Address</font></span>",
            remote: "<span><font color='red'>Email Address already exist</font></span>",

          }, 
          mobile: {
            required: "<span><font color='red'>Please Enter Mobile </font></span>",
            minlength: "<span><font color='red'>Please Enter Minmum 10 Character </font></span>",
          },
          password: {
            required: "<span><font color='red'>Please Enter Password</font></span>",
          },
          confPassword: {
            required: "<span><font color='red'>Please Enter Confirm Password</font></span>",
            equalTo: "<span><font color='red'>Password Should Match Confirm Password</font></span>",
          },
          address1: {
            required: "<span><font color='red'>Please Enter Address</font></span>",
          },
          city: {
            required: "<span><font color='red'>Please Enter City</font></span>",
          },
          postcode: {
            required: "<span><font color='red'>Please Enter Post code</font></span>",
          },
          country: {
            required: "<span><font color='red'>Please Enter country</font></span>",
          },
        }
      });

      
     
    });



    </script>