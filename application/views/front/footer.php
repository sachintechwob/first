 <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
            <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="#" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets...</a>      
          </div>
          <!-- END TWITTER BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="#">info@metronic.com</a><br>
              Skype: <a href="#">metronic</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
      
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="title-text">
        <div ><span class="loginLpop title login">Login Form </span>
            <span class="loginSpop title signup">Signup Form</span>
        </div>
      </div>
        </div>
        <div class="modal-body">
          <div class="wrapper">
      
          <div class="ctnMsg"></div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form id="user-login" method="post" class="login">
            <div class="field">
              <input type="text" name="email" placeholder="Email Address">
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password">
            </div>
            <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" id="btnLogin" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form id="user-signup" method="post" class="signup">
            <div class="field">
              <input type="text" name="name" placeholder="Name">
            </div>
            <div class="field">
              <input type="email" name="email" placeholder="Email Address">
            </div>
            <div class="field">
              <input type="text" name="phone" onkeypress="return validateNumber(event)" placeholder="Phone">
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" id="btnSubmit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
        </div>
        
      </div>
      
    </div>
  </div>

   

    <!-- BEGIN fast view of a product -->
   
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="<?php echo base_url(''); ?>assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(''); ?>assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(''); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?php echo base_url(''); ?>assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="<?php echo base_url(''); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url(''); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo base_url(''); ?>assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='<?php echo base_url(''); ?>assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo base_url(''); ?>assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
    <script src="<?php echo base_url(''); ?>assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo base_url(''); ?>assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/validatejs.js'); ?>"></script>
 <script type="text/javascript">
    var base_url = "<?php echo base_url(''); ?>";
     $('.thumbnail').mouseenter(function() {
       $(this).find(".mainImg").hide();
       $(this).find(".gifImage").show();
       $(this).find(".pay-icon").hide();
       
     }); $('.thumbnail').mouseleave(function() {
       $(this).find(".gifImage").hide();
       $(this).find(".mainImg").show();
       $(this).find(".pay-icon").show();
     });
 </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
 
<script>

  // $(document).bind("contextmenu",function(e) {
  //  e.preventDefault();
  // });

  // document.onkeydown = function(e) {
  //   if(event.keyCode == 123) {
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
  //   return false;
  //   }
  //   if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
  //   return false;
  //   }
  // }

  $('.loginSpop').hide();

   const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
        // $(".loginTitle").html('SIGNUP');
        $('.loginSpop').show();
        $('.loginLpop').hide();
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
        // $(".loginTitle").html('LOGIN');
        $('.loginSpop').hide();
        $('.loginLpop').show();

      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });

      $(function() {
          $("#user-login").validate({ 
            rules: {
              email: {
                  required: true,
                  email: true,
              },
              password: {
                required: true,
                minlength: 6,
              },
            },
            messages: {
              email: {
                required: "<span><font color='red'>Please enter email address</font></span>",
                email :"<span><font color='red'>Please email valid address</font></span>",
              }, 
              password: {
                required: "<span><font color='red'>Please enter password </font></span>",
                minlength: "<span><font color='red'>Please enter minmum 6 character </font></span>",
            
              },
            }
          });
        });

      $(function() {
          $("#user-signup").validate({ 
            rules: {
              email: {
                  required: true,
                  email: true,
              },
              password: {
                required: true,
                minlength: 6,
              },
              phone: {
                required: true,
                minlength: 10,
              },
              name: {
                required: true,
              },
            },
            messages: {
              email: {
                required: "<span><font color='red'>Please enter email address</font></span>",
                email :"<span><font color='red'>Please email valid address</font></span>",
              }, 
              password: {
                required: "<span><font color='red'>Please enter password </font></span>",
                minlength: "<span><font color='red'>Please enter minmum 6 character </font></span>",
              },
              phone: {
                required: "<span><font color='red'>Please enter phone number </font></span>",
                minlength: "<span><font color='red'>Please enter minmum 10 character </font></span>",
              },
              name: {
                required: "<span><font color='red'>Please enter name </font></span>",
              },
            }
          });
        });

      $(document).on('submit', '#user-signup', function(e){
        e.preventDefault();
        $("#btnSubmit").val('Please wait...');        
        $.ajax({
          type: "POST",
          url: base_url+'invite/signUp',
          data: $('#user-signup').serialize(),  
          success: function(data) {
            if(data == 'success')
            {
              location.reload();
            }
            else
            {
              $(".ctnMsg").html('Please try again after some time').css({"color":"red"});
              $("#btnSubmit").val('Signup');
              setTimeout(function(){
                $(".ctnMsg").html('');
              }, 2000);
            }
          }
      });
    });  

      $(document).on('submit', '#user-login', function(e){
        e.preventDefault();
        $("#btnLogin").val('Please wait...');        
        $.ajax({
          type: "POST",
          url: base_url+'invite/login',
          data: $('#user-login').serialize(),  
          success: function(data) {
            if(data == 'success')
            {
              location.reload();
            }
            else
            {
              $(".ctnMsg").html('Invalid login details..').css({"color":"red"});
              $("#btnLogin").val('Login');
              setTimeout(function(){
                $(".ctnMsg").html('');
              }, 2000);
            }
          }
      });
    });  

      function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key )
      }

</script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
