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
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Cart</h2>
            <div class="row">
                <div class="col-md-12">
                    <?php if(count($cart) > 0){ ?>
                        <form method="POST" action="<?php echo base_url('invite/checkout'); ?>">
                      <div class="shopping-cart">
                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Products</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Total</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>
                        <?php if($cart){
                            $i = 1;
                            $cartTotal = 0;
                            foreach ($cart as $item) {

                                $cartTotal += $item['price'] * 1;
                             ?>
                              <div class="cart-item">
                            <div class="row">
                                <div class="col-md-4 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="<?php echo base_url('uploads/'.$item['image']); ?>" style="width: 50px; height: 50px" alt="">
                                            <?php echo $item['name']; ?>
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label  class="price">$<?php echo $item['price']; ?> </label>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1 minusBtn" price<?php echo $i; ?>='<?php echo $item['price']; ?>' rowId= '<?php echo $i; ?>'><i class="fa fa-minus"></i></span>
                                            <input type="text" name="qty[]" value="1" readonly class="input-quantity qty<?php echo $i; ?>" />
                                            <input type="hidden" name="product_id[]" value="<?php echo $item['id']; ?>" />
                                            <span class="btn btn1 plusBtn" price<?php echo $i; ?>='<?php echo $item['price']; ?>' rowId= '<?php echo $i; ?>'><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <label class="price ">$<span class="updatePriceRow updatePrice<?php echo $i; ?>"><?php echo $item['price'] * 1 ; ?></span> </label>
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <a href="javascript:void(0)" title='Remove' productId="<?php echo $item['id']; ?>" class="btn btn-danger btn-sm removeProduct">
                                            <i class="fa fa-trash"></i> 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php $i++;  }
                        } ?>
                        
                    </div>
                    <div class="col-md-10">
                        <div>
                            <div style="padding: 14px;" class="shopping-total">
                                <ul>
                                    <li class="shopping-total-price">
                                    <em>Total Price</em>
                                    <strong class="price">$<span id="cartTotal"><?php echo $cartTotal; ?></span></strong>
                                    </li>
                                </ul>
                                <button style="width: 85px;" class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php } else { echo  " <h3> No product in cart </h3>"; } ?>
                </div>
                
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
      
    </div>

   <script type="text/javascript">
     $(document).on('click', '.plusBtn', function(e){
        var rowId = $(this).attr('rowId');
        var price = $(this).attr('price'+rowId);
        var qty = parseInt($('.qty'+rowId).val()) + 1;
        $(".updatePrice"+rowId).html(price * qty );
        $('.qty'+rowId).val(qty);
        var sum = 00;

        $('.updatePriceRow').each(function(index, element){
            var value = $(element).text();
                sum += Number(value);
            });  
        $("#cartTotal").text(sum);  
     });
     $(document).on('click', '.minusBtn', function(e){
        var rowId = $(this).attr('rowId');
        var price = $(this).attr('price'+rowId);
        var qty = parseInt($('.qty'+rowId).val()) -1 ;
        if(qty > 0)
        {      
          $(".updatePrice"+rowId).html(price * qty );
          $('.qty'+rowId).val(qty);
          var sum = 00;

          $('.updatePriceRow').each(function(index, element){
            var value = $(element).text();
                sum += Number(value);
            });  
            $("#cartTotal").text(sum);  
        }  
     });

     $(document).on('click', '.removeProduct', function(e){
        var id = $(this).attr("productId");
        let array = countCookieArray[1].split(",");
        let elementToRemove = id;
        array = array.filter(item => item !== elementToRemove);
        document.cookie = "userCartItems = " + array + "" ;
        location.reload();
     });  
   </script>
   </body>
<!-- END BODY -->
</html>