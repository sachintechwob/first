<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
        /* Cart or Wishlist */
        .shopping-cart .cart-header{
            padding: 10px;
        }
        .shopping-cart .cart-header h4{
            font-size: 18px;
            margin-bottom: 0px;
        }
        .shopping-cart .cart-item a{
            text-decoration: none;
        }
        .shopping-cart .cart-item{
            background-color: #fff;
            box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
            padding: 10px 10px;
            margin-top: 10px;
        }
        .shopping-cart .cart-item .product-name{
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            cursor: pointer;
        }
        .shopping-cart .cart-item .price{
            font-size: 16px;
            font-weight: 600;
            padding: 4px 2px;
        }
        .shopping-cart .btn1{
            border: 1px solid;
            margin-right: 3px;
            border-radius: 0px;
            font-size: 10px;
        }
        .shopping-cart .btn1:hover{
            background-color: #2874f0;
            color: #fff;
        }
        .shopping-cart .input-quantity{
            border: 1px solid #000;
            margin-right: 3px;
            font-size: 12px;
            width: 15%;
            outline: none;
            text-align: center;
        }

        form .btn {
            height: 23px; 
            width: 25px;
        }
        /* Cart or Wishlist */
    </style>

    <div class="main">
        <div class="container">
              <div class="col-md-12 sale-product">
                <!-- <h2>Cart</h2> -->
                <div id="cartInfo">
                    
                </div>
            </div>
        </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
      
    </div>

   <?php $this->load->view('front/footer'); ?>
   <script type="text/javascript">
    var countResult = document.cookie;
    var countCookieArray = countResult.split("userCartItems=");
    // console.log(countCookieArray[1]);
    // alert(countCookieArray);
    $.ajax({
        type: "POST",
        url:  "<?php echo base_url('invite/view_cart')?>",
        data: {productId : countCookieArray[1]},
        cache: false,
        // dataType: "json",
        success: function(response){
            $("#cartInfo").html(response);
        }
    });

   </script>
   </body>
<!-- END BODY -->
</html>




