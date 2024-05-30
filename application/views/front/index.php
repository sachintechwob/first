

    <div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
            <div class="row">
              <?php foreach ($invitations as $invitation) { ?>
                  <div class="col-sm-6 col-md-3 col-xl-3 col-12">
                      <div class="mainBox">
                          <div class="box">
                              <div class="video-card thumbnail">
                                  <a href="<?php echo base_url('details/'.$invitation['id']); ?>">
                                      <span class="pay-icon"></span>
                                      <img class="mainImg" height="160px" width="630px" src="<?php echo base_url('uploads/'.$invitation['image']); ?>">
                                      <img style="display: none" class="gifImage" height="160px" width="630px" src="<?php echo base_url('uploads/'.$invitation['gif_image']); ?>">
                                  </a>
                              </div>
                              <div>
                                  <p class="display-name"><a style="color: #000;" href="<?php echo base_url('details/'.$invitation['id']); ?>"><?php echo $invitation['name']; ?></a></p>
                              </div>
                              <div class="edit-section">
                                  <div class="content price-div">₹<?php echo $invitation['price']; ?></div>
                                  <div productId='<?php echo $invitation['id']; ?>' class="content edit-btn right-position addtoCart">Add to Cart</div>
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
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
      
    </div>

      <?php $this->load->view('front/footer'); ?>
      <script type="text/javascript">

        $(document).on('click', '.addtoCart', function(e){

          var productId = $(this).attr('productId');
          var userId = "<?php echo $this->session->userdata('userId'); ?>";
          if(userId)
          {
            $.ajax({
              type: "POST",
              url:  "<?php echo base_url('invite/add_to_cart')?>",
              data: {productId : productId},
              cache: false,
              dataType: "json",
              success: function(response){
                $(".cartBadge").html(response.cart);
              }
            });
          }  
          else
          {
              var result = document.cookie;
              var cookieArray = result.split("userCartItems=");

              // console.log(cookieArray,'arra');
              if(cookieArray.length > 1)
              {
                var cc = ''+ cookieArray;
                cookieArray = cc.split(',');
                // console.log(cc,'cc split');
                cookieArray = cookieArray.concat([productId]);
                // cookieArray = cookieArray.shift(); 
                console.log(cookieArray,'concate');
                cookieArray = removeDuplicates(cookieArray);
                const newAddedC =  document.cookie = "userCartItems = " + cookieArray + "" ;

                const length = countLength();
                const lengthVal = length - 1;
                $(".cartBadge").html(lengthVal);

              } 
              else
              {
                  document.cookie = "userCartItems = " + productId + "" ;
                  $(".cartBadge").html('1');
              }  
            }
         });

        function countLength(){
            var countResult = document.cookie;
            var countCookieArray = countResult.split("userCartItems=");
            // var count = countCookieArray.split(',');
            return countCookieArray[1].split(',').length;
          
        }

        

        function removeDuplicates(arr) {
        return arr.filter((item,
            index) => arr.indexOf(item) === index);
    }   
      </script>
   </body>
<!-- END BODY -->
</html>