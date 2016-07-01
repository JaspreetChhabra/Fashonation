  <?php
$result = $this->gethomeData;
$popularProducts = $this->getPopularProducts;
$newArrivals = $this->getNewArrivals;
$specials = $this->getSpecials;
$bestSellers = $this->getBestSellers;
?>
  <!--Home Page Body-->
  <!--Slider-->
  <?php //echo $_SESSION['session_id'].'<br>'; 

       foreach ($_SESSION['cart'] as $value) {
           ///echo $value.'<br>';
           //print_r (explode(",",$value));
       }

  ?>
    <div class="container slider-container">

        <div id="boxgallery" class="boxgallery" data-effect="effect-2" style="position: relative !important;">
            <div class="panel"><img src="<?php echo images;?>/slider/3.jpg" class="img-responsive" alt="Image 3"/></div>
            <div class="panel"><img src="<?php echo images;?>/slider/4.jpg" class="img-responsive" alt="Image 4"/></div>
            <div class="panel"><img src="<?php echo images;?>/slider/1.jpg" class="img-responsive" alt="Image 1"/></div>
            <div class="panel"><img src="<?php echo images;?>/slider/2.jpg" class="img-responsive" alt="Image 2"/></div>
        </div>
    </div>


    <!--Slider-->

    <!--Offer Zone -->

     <!-- <div class="container offer-zone"> 
        <div class="row">
           <div class="col-lg-8" style="width: 57.6%;">
               <div class="col-lg-4" style="width:49.7%">
                   <img src="images/offerzone/1.jpg">
               </div>
               <div class="col-lg-4">
                   <img src="images/offerzone/1.jpg">
               </div>
           </div>
           <div class="col-lg-4" style="width: 31.3%">
               <img src="images/offerzone/1.jpg">
           </div>
        </div>
    </div> -->
    <div class="container" id="cont-offerzone">
        <div class="row no-gutters offer-zone-row">
            <div id="content">
            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 recent-imageffect">
                        <a href="">
                                <img class="img-responsive" src="<?php echo images;?>/offerzone/1.jpg" width="100%" />
                                <div class="overlay">
                                        <h1>Recent<br>Products</h1>
                                        <a class="info" href="#">
                                        
                                        <span class="button">Shop now!</span>
                                        </a>  
                                </div>
                            </a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 quality-imageffect">
                                
                                <a href="">
                                <img class="img-responsive" src="<?php echo images;?>/offerzone/6.jpg" width="100%" />
                                </a>
                                
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 quality-imgtext">
                            <a href="">
                                <img class="img-responsive" src="<?php echo images;?>/offerzone/bg.jpg" width="100%" />
                                <div class="s-desc">
                                    <h2 class="mod1">EXCELLENT 
                                    <span>QUALITY</span>
                                    </h2>
                                    <p>We are professional, experienced and dedicated to your satisfaction.</p>
                                    <span class="button">Shop now!</span>
                                </div>
                            </a>
                        </div>

                    </div>
                        
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 reasonable-text">
                    <!-- <horizontal image> -->
                    <a href="#">
                        <img class="img-responsive" src="<?php echo images;?>/offerzone/7.jpg" width="100%" />
                        <div class="s-desc">
                            <h2 class="mod1">Reasonable 
                            <span>Prices</span>
                            </h2>
                            <p>We are committed to  the highest quality</p>
                            <span class="button">Shop now!</span>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 pull-right">

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 sales-imgtext hovereffect">
                    
                    <a href="">
                        <img class="img-responsive" src="<?php echo images;?>/offerzone/bg.jpg" width="100%" />
                        <div class="overlay">
                            <h1>Sale
                                <span>Get Up To</span>
                                <em>20% OFF</em>
                            </h1>
                            <a class="info" href="#">
                                <span class="button">Shop now!</span>
                            </a>
                        </div>
                    </a>
                    
                </div>
                
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 newarrival-imgtext">
                    <!-- <long image vertical> -->    
                    <a href=""><img class="img-responsive" src="<?php echo images;?>/offerzone/1.jpg" width="100%" />
                    
                    <div class="overlay">
                        <h1 class="arrival-text">New<br>Arrivals</h1>
                        <a class="info" href="#">
                                <span class="button">Shop now!</span>
                        </a>  
                    </div>
                    

                    </a>
                </div>
                
            </div>
        </div>
        </div>
    </div>

    <!-- <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 offer-zone">
            <div class="col-lg-8 col-sm-12 col-md-8 col-xs-12">
                
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                        <img class="img-responsive" src="images/offerzone/1.jpg" />
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                            
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <img class="img-responsive" src="images/offerzone/4.jpg" />
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <img class="img-responsive" src="images/offerzone/4.jpg" />
                        </div>

                    </div>
                        
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    
                    <img class="img-responsive" src="images/offerzone/2.jpg" />
                
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 pull-right">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
                <img class="img-responsive" src="images/offerzone/4.jpg" />
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
                   
                <img class="img-responsive" src="images/offerzone/1.jpg" />
                </div>
                
            </div>
            
        </div> -->
    <!--Offer Zone -->


    <!-- Other Tabs-->

    <div id="columns" class="conatiner product-container">
      <div class="row">
        <div class="large-left col-sm-12">
          <div class="row">
            <div id="center_column" class="center_column col-xs-12 col-sm-12 accordionBox">
      
              <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                  <li class="homefeatured  active">
                    <a data-toggle="tab" href="#homefeatured" class="homefeatured">Popular</a>
                  </li>
                  <li class="blocknewproducts">
                    <a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts">New arrivals</a>
                  </li>
                  <li class="blockbestsellers">
                    <a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers">
                    Best Sellers
                    </a>
                  </li>
                  <li class="blockspecials">
                  <a data-toggle="tab" href="#blockspecials" class="blockspecials">Specials</a>
                  </li>

              </ul>

              <div class="tab-content">

                    <ul id="homefeatured" class="tab-pane active">
                        <!-- <li class="border-line ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line first-item-of-tablet-line first-item-of-mobile-line hovered"></li> -->

                <?php foreach ($popularProducts as $row) {
                        
                        $data = array(
                            'id' => $row["product_id"],
                            'name' => $row["product_name"],
                            'image' => '1.jpg',
                            'price' => $row["product_selling_price"],
                            'discount' => '0',
                            'qty' => '1'
                            );
                    ?>
                    <div class="prod col-sm-12 col-xs-12 col-lg-3 col-md-3" id='<?php echo $row["product_id"];?>'>
                        <div class="thumbnail">
                       <!--  <img class="group list-group-image" class="img-responsive disp" height="100" src="./imgs/1.jpg" alt="" />
                        <img class="group list-group-image"  style="display: none;" class="img-responsive nodisp" height="100" src="./imgs/2.jpg" alt="" />
                         -->
                         
                        <img src="<?php echo images;?>/1.jpg" class="img-responsive" height="100">
                         

                        <div class="caption">
                                <div style="padding-left: 0px;" class="pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="whitespace:normal;" class="col-lg-12 col-md-12 col-sm-10 col-xs-10" ><a href="#"><?php echo $row["product_name"];?></a></h4>
                                    <h4 class="col-lg-12 col-md-12 col-sm-10 col-xs-10">Rs <?php echo $row["product_selling_price"];?>. &nbsp;&nbsp;<s>Rs <?php echo $row["product_mrp"];?>.</s></h4> <br/>  
                                </div>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right items">
                                    <a class="cartBtn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart" data-product="<?php echo base64_encode($row['product_id'].','.$row['product_name'].','.$row['product_selling_price'].','.'1.jpg'.','.'1'.',0'); ?>">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist">
                                    <span class="glyphicon glyphicon glyphicon-heart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share product">
                                    <span class="glyphicon glyphicon-share"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Overview">
                                    <span class="glyphicon glyphicon-eye-open"></span> 
                                    </a>
                                </p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php 
                        }

                        ?>

                    </ul>

                    <ul id="blocknewproducts" class="tab-pane">
                        <?php foreach ($popularProducts as $row) {
                    
                    ?>
                    <div class="prod col-sm-12 col-xs-12 col-lg-3 col-md-3">
                        <div class="thumbnail">
                       <!--  <img class="group list-group-image" class="img-responsive disp" height="100" src="./imgs/1.jpg" alt="" />
                        <img class="group list-group-image"  style="display: none;" class="img-responsive nodisp" height="100" src="./imgs/2.jpg" alt="" />
                         -->
                         
                        <img src="<?php echo images;?>/1.jpg" class="img-responsive" height="100">
                         

                        <div class="caption">
                                <div style="padding-left: 0px;" class="pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="whitespace:normal;" class="col-lg-12 col-md-12 col-sm-10 col-xs-10" ><a href="#"><?php echo $row["product_name"];?></a></h4>
                                    <h4 class="col-lg-12 col-md-12 col-sm-10 col-xs-10">Rs <?php echo $row["product_selling_price"];?>. &nbsp;&nbsp;<s>Rs <?php echo $row["product_mrp"];?>.</s></h4> <br/>  
                                </div>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right items">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist">
                                    <span class="glyphicon glyphicon glyphicon-heart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share product">
                                    <span class="glyphicon glyphicon-share"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Overview">
                                    <span class="glyphicon glyphicon-eye-open"></span> 
                                    </a>
                                </p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php 
                        }

                        ?>


                        
                    </ul>

                    <ul id="blockbestsellers" class="tab-pane">
                    
                        <?php foreach ($popularProducts as $row) {
                    
                    ?>
                    <div class="prod col-sm-12 col-xs-12 col-lg-3 col-md-3">
                        <div class="thumbnail">
                       <!--  <img class="group list-group-image" class="img-responsive disp" height="100" src="./imgs/1.jpg" alt="" />
                        <img class="group list-group-image"  style="display: none;" class="img-responsive nodisp" height="100" src="./imgs/2.jpg" alt="" />
                         -->
                         
                        <img src="<?php echo images;?>/1.jpg" class="img-responsive" height="100">
                         

                        <div class="caption">
                                <div style="padding-left: 0px;" class="pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="whitespace:normal;" class="col-lg-12 col-md-12 col-sm-10 col-xs-10" ><a href="#"><?php echo $row["product_name"];?></a></h4>
                                    <h4 class="col-lg-12 col-md-12 col-sm-10 col-xs-10">Rs <?php echo $row["product_selling_price"];?>. &nbsp;&nbsp;<s>Rs <?php echo $row["product_mrp"];?>.</s></h4> <br/>  
                                </div>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right items">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist">
                                    <span class="glyphicon glyphicon glyphicon-heart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share product">
                                    <span class="glyphicon glyphicon-share"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Overview">
                                    <span class="glyphicon glyphicon-eye-open"></span> 
                                    </a>
                                </p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php 
                        }

                        ?>
                    </ul>


                    <ul id="blockspecials" class="tab-pane">
                        <?php foreach ($popularProducts as $row) {
                    
                    ?>
                    <div class="prod col-sm-12 col-xs-12 col-lg-3 col-md-3">
                        <div class="thumbnail">
                       <!--  <img class="group list-group-image" class="img-responsive disp" height="100" src="./imgs/1.jpg" alt="" />
                        <img class="group list-group-image"  style="display: none;" class="img-responsive nodisp" height="100" src="./imgs/2.jpg" alt="" />
                         -->
                         
                        <img src="<?php echo images;?>/1.jpg" class="img-responsive" height="100">
                         

                        <div class="caption">
                                <div style="padding-left: 0px;" class="pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="whitespace:normal;" class="col-lg-12 col-md-12 col-sm-10 col-xs-10" ><a href="#"><?php echo $row["product_name"];?></a></h4>
                                    <h4 class="col-lg-12 col-md-12 col-sm-10 col-xs-10">Rs <?php echo $row["product_selling_price"];?>. &nbsp;&nbsp;<s>Rs <?php echo $row["product_mrp"];?>.</s></h4> <br/>  
                                </div>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right items">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist">
                                    <span class="glyphicon glyphicon glyphicon-heart"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share product">
                                    <span class="glyphicon glyphicon-share"></span> 
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Overview">
                                    <span class="glyphicon glyphicon-eye-open"></span> 
                                    </a>
                                </p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php 
                        }

                        ?>
                    </ul>
              </div>
            </div>
          </div>
        </div> 
      </div>       
    </div>  

    <!-- Other tabs -->


    

    <!--parallax-->
    <div class="container" id="parallax_cont">
    <div class="row">
    <div id="ptitle" class="pslide pheader">
      
        <!--Testemonial-->  

    <div class="container-fluid" id="testemonial_cont">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
      
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
              <li data-target="#quote-carousel" data-slide-to="2" class=""></li>
            </ol>
                    
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">

            <!-- Quote 1 -->
            <div class="item active">
              <div class="row">
                <div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
                    <img class="testimg img-responsive" src="<?php echo images;?>/slide3.jpg">
                </div>
                <div class="col-sm-10 col-xs-12 col-md-10 col-lg-10">
                  <p class="ptest">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.”</p>
                  <small><strong>Vulputate M., Dolor</strong></small>
                </div>
              </div>
            </div>

            <!-- Quote 2 -->
            <div class="item">
              <div class="row">
                <div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
                    <img class="testimg img-responsive" src="<?php echo images;?>/slide3.jpg">
                </div>
                <div class="col-sm-10 col-xs-12 col-md-10 col-lg-10">
                  <p class="ptest">“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.”</p>
                  <small><strong>Fringilla A., Vulputate Sit</strong></small>
                </div>
              </div>
            </div>

            <!-- Quote 3 -->
            <div class="item">
              <div class="row">
                <div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
                    <img class="testimg img-responsive" src="<?php echo images;?>/slide3.jpg"\>
                </div>
                <div class="col-sm-10 col-xs-12 col-md-10 col-lg-10">
                  <p class="ptest">“Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.”</p>
                  <small><strong>Aenean A., Justo Cras</strong></small>
                </div>
              </div>
            </div>    
          </div>
      </div>                          
    </div>
  </div>
</div>

    <!-- Testemonials-->
    </div>
    </div>   
   </div>


    <!-- <div id="parallax_0" class="parallax">
<div data-source-url="http://livedemo00.template-help.com/opencart_57682/image/cache/catalog/parallax-1-1600x1228.jpg" class="parallax-1 " style="width: 1349px; margin-left: -675px; left: 50%; background-image: url(&quot;http://livedemo00.template-help.com/opencart_57682/image/cache/catalog/parallax-1-1600x1228.jpg&quot;); background-attachment: fixed; background-position: 50% 58.6219%;">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1 class="mod1">Find all kinds of ladies' handbags
<span>suitable for any occasion</span>
</h1>
<div class="separator"></div>
<p>A great number of different grateful clients is the best prove<br><br> of the previous statement.</p>
<a class="button" href="index.php?route=product/product&amp;product_id=28">Shop now!</a> </div>
</div>
</div>
</div>
</div> -->
    <!--parallax-->

    <!--Home Page Body-->

    


    <!-- <script src="js/bootstrap-dropdown-on-hover.js"></script> -->

    <!-- Script to Activate the Carousel -->
    <script src="<?php echo js?>/classie.js"></script>
    <script src="<?php echo js?>/boxesFx.js"></script>

    <script>
        new BoxesFx( document.getElementById( 'boxgallery' ) );
    </script>

    <script>
        

    </script>
    <script>
        // $("#demo").bootstrapDropdownOnHover();


        $(document).ready(function() {    
          $('.navbar-inverse .navbar-nav > li.dropdown').hover(function() {
            $('.dropdown-menu', this).stop(true, true).slideUp(0).slideDown('slow');
            $(this).addClass('open');
                  }, function() {
            $('.dropdown-menu', this).stop(true, true).fadeOut('fast');
            $(this).removeClass('open');
            
            });
       });

         $('.carousel').carousel({
            interval: 5000 //changes the speed
        });


         

    $('#nav').affix({
        offset: {
            top: $('header').height()
        }
    });

    $('.nav-tabs > li').mouseover( function(){
        $(this).find('a').tab('show');
        });
        $('.nav-tabs > li').mouseout( function(){
          $(this).find('a').tab('hide');
    });


    // $(document).ready(function () {
    //     $(".dropdown, .btn-group").hover(function () {
    //         var dropdownMenu = $(this).children(".dropdown-menu");
    //         if (dropdownMenu.is(":visible")) {
    //             dropdownMenu.parent().toggleClass("open");
    //         }
    //     });
    // });

    // $(document).ready(function(){
    // $(".dropdown").hover(            
    //     function() {
    //         $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown();
    //         $(this).toggleClass('open');        
    //     },
    //     function() {
    //         $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp();
    //         $(this).toggleClass('open');       
    //     }
    // );
    // });

    </script>
        
    <script>
      var url = "<?php echo images;?>";

    $(document).ready(function(){

        $(".thumbnail").hover(function () {
            $(this).find("img").attr("src", url+"/2.jpg");
        },

        function () {
            $(this).find("img").attr("src", url+"/1.jpg");
        });
    });


    // Add To cart Functionality

    

            
    </script>
</body>

</html>
