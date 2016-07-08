<?php
$result = $this->getProductInfo;

$brnd = $this->getBrands;

?>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Catalogue | Fashonation</title>


    
    <link rel="stylesheet" href="<?php echo css?>/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo css?>/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="<?php echo css?>/shopcustom.css">
    <script>
        
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
    
</head>

<body>

    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3" style="border: 1px solid #cfcfcf;margin-top:50px;">
                    <div class="left-sidebar">
                        <!-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear" class="collapsed">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Sportswear
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Nike </a></li>
                                            <li><a href="">Under Armour </a></li>
                                            <li><a href="">Adidas </a></li>
                                            <li><a href="">Puma</a></li>
                                            <li><a href="">ASICS </a></li>
                                        </ul>
                                    </div>
                                </div>
                        </div> -->
                        <div class="brands_products"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#colorfilters" class="collapsed">For</span></h2>
                            <div id="colorfilters" class="text-center brands-name panel-collapse">
                                   <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#" onclick="getQuery(0)"> All</a></li>
                                    <li><a href="#" onclick="getQuery(1)"> Men</li>
                                    <li><a href="#" onclick="getQuery(2)"> Women</a></li>
                                </ul>
                            </div>
                        </div>
                        <br/><br/>
                            <div class="brands_products"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#designer" class="collapsed">Designers <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="designer" class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                <?php  foreach ($brnd as $rw) {?>


                                    <li><a style="cursor:pointer;" onclick="getProduct(<?php echo $rw["brand_id"];?>)"  > <span class="pull-right"> (<?php echo $rw["totalproducts"];?>) </span><?php echo $rw["brandname"];?></a></li>
                                   
                                <?php } ?>

                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        <br/><br/>
                        <div class="brands_products"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#menwear" class="collapsed">Men <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="menwear" class="brands-name panel-collapse collapse">
                                <form method="get" class="form-horizontal">
                                <div class="form-group">
                                <ul class="text-center nav nav-pills nav-stacked">
                                    <li><a href="#" onclick="getQuery(1,2)"> Party</a></li>
                                    <li><a href="#" onclick="getQuery(1,1)"> Formal</a></li>
                                    <li><a href="#" onclick="getQuery(1,3)"> Casual</a></li>
                                     
                                </ul>
                                </div>
                                </form>
                                        
                            </div>
                        </div><!--/brands_products-->
                        <br/><br/>
                        
                        <div class="brands_products"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#womenwear" class="collapsed">Women <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="womenwear" class="brands-name panel-collapse collapse">
                                <form method="get" class="form-horizontal">
                                <div class="form-group">
                                <ul class="text-center nav nav-pills nav-stacked">
                                    <li><a href="#" onclick="getQuery(2,2)"> Party</a></li>
                                    <li><a href="#" onclick="getQuery(2,1)"> Formal</a></li>
                                    <li><a href="#" onclick="getQuery(2,3)"> Casual</a></li>
                                    <li><a href="#" onclick="getQuery(2,4)"> Bridal</a></li>
                                    <li><a href="#" onclick="getQuery(2,5)"> Ethnic</a></li>
                                </ul>
                                </div>
                                </form>
                                        
                            </div>
                        </div><!--/brands_products-->
                        <br/><br/>

                        <!-- <div class="brands_products"> -->
                        <!--brands_products-->
<!--                             <h2 data-toggle="collapse" data-parent="#accordian" href="#colorfilters" class="collapsed">Color Filters <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="colorfilters" class="brands-name panel-collapse collapse">
                                   <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-left rounded " style="background-color:black;">&nbsp;</span>Black</a></li>
                                    <li><a href="#"> <span class="pull-left rounded" style="background-color:red;">&nbsp;</span>Red</a></li>
                                    <li><a href="#"> <span class="pull-left rounded" style="background-color:blue;">&nbsp;</span>Blue</a></li>
                                    <li><a href="#"> <span class="pull-left rounded" style="background-color:green;">&nbsp;</span>Green</a></li>
                                    
                                </ul>
                            </div>
                        </div>

 -->




                        <div class="brands_products" style="margin-bottom: 50px;padding-top:20px;"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#pricerange" class="collapsed">Price Range <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="pricerange" class="brands-name panel-collapse collapse">
                                <div class="col-lg-12">
                                   <!-- <input type="radio" value=">500 and < 1500" /> -->
                                   <div class="radio">
                                        <input id="radio1" name="pricerg1" onclick="getProPrice(500,1500)" type="radio">
                                        <label for="radio1">
                                            >500 and < 1500
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <!-- <input type="radio" value=">500 and < 1500" /> -->
                                   <div class="radio">
                                        <input id="radio2" onclick="getProPrice(1500,3000)" name="pricerg1" type="radio">
                                        <label for="radio2">
                                            >1500 and < 3000
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <!-- <input type="radio" value=">500 and < 1500" /> -->
                                   <div class="radio">
                                        <input id="radio3" onclick="getProPrice(3000,10000)" name="pricerg1" type="radio">
                                        <label for="radio3">
                                            >3000 and < 10000
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <!-- <input type="radio" value=">500 and < 1500" /> -->
                                   <div class="radio">
                                        <input id="radio4" onclick="getProPrice(10000,100000)" name="pricerg1" type="radio">
                                        <label for="radio4">
                                            >10000
                                        </label>
                                    </div>
                                </div>
                                

                                <br/><br/><br/><br/><br/><br/><br/><br/>
                                
                            </div>
                        </div><!--/brands_products-->
                        
                        <!-- <div class="price-range"> -->
                        <!--price-range-->
                            <!-- <h2>Price Range</h2>
                            <div class="well text-center">
                                 <div class="slider slider-horizontal" style="width: 174px;"><div class="slider-track"><div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div><div class="slider-handle round left-round" style="left: 41.6667%;"></div><div class="slider-handle round" style="left: 75%;"></div></div><div class="tooltip top" style="top: -30px; left: 68px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 450</div></div><input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"></div><br>
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div> -->
                        <!-- </div> -->
                        <!--/price-range-->
                        
                        
                    </div>
                </div>

            <div class="col-md-9">

               
                <div id="content" class="row">

                    <?php
                    foreach ($result as $row) {


                        $data = array(
                            'id' => $row["product_id"],
                            'name' => $row["product_name"],
                            'image' => '1.jpg',
                            'price' => $row["product_selling_price"],
                            'discount' => '0',
                            'qty' => '1'
                            );
                    ?> 
                        
                        
                        
                        
                    
                    <div class="prod col-sm-12 col-xs-12 col-lg-4 col-md-4">
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
                                    <a class="cartBtn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart" data-size="39" data-id="<?php echo $row['product_id']; ?>" data-product="<?php echo base64_encode($row['product_id'].','.$row['product_name'].','.$row['product_selling_price'].','.'1.jpg'.','.'1'.',0'); ?>">
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
                    


                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <script type="text/javascript">

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



    var url = "<?php echo images;?>";

    $(document).ready(function(){
        // $(".thumbnail").hover(function () {
        //     $(this).find("img").attr("src", url+"/2.jpg");
        // },

        // function () {
        //     $(this).find("img").attr("src", url+"/1.jpg");
        // });



        $(document).on({
            mouseenter: function () {
                $(this).find("img").attr("src", url+"/2.jpg");
                $('[data-toggle="tooltip"]').tooltip(); 
            },
            mouseleave: function () {
               $(this).find("img").attr("src", url+"/1.jpg");
            }
        }, ".thumbnail"); 

    });


    function getProduct(pid)
    {
        
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
//            alert(xhttp.responseText);

                 document.getElementById("content").innerHTML = xhttp.responseText;
                 
            }
           };
           xhttp.open("POST", "<?php echo url;?>/catlog/getProductFromBrand/"+pid, true);
          xhttp.send();
    }


    function getQuery(id,val=null)
    {
//        alert(window.location.href+" id: "+id+" "+val);

        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                 document.getElementById("content").innerHTML = xhttp.responseText;
            }
           };
           xhttp.open("POST", "<?php echo url;?>/catlog/getFilteredProducts/"+id+"/"+val, true);
          xhttp.send();

    }

    function getProPrice(val1 , val2)
    {
       alert(window.location.href+" id: "+val1+" "+val2);

        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                 document.getElementById("content").innerHTML = xhttp.responseText;
            }
           };
           xhttp.open("POST", "<?php echo url;?>/catlog/getFilteredPrice/"+val1+"/"+val2, true);
          xhttp.send();

    }

    

        $(document).ready(function(){
            $('.brands_products h2').click(function(){
                $(this).find('span').toggleClass("glyphicon-menu-down").toggleClass("glyphicon-menu-up");
            },function(){
                $(this).find('span').toggleClass("glyphicon-menu-up").toggleClass("glyphicon-menu-down");   
            });
        });

        // $(document).ready(function(){

        //     viewwidth = $(window).width();
        //     if(viewwidth > 769)
        //     {
        //         $('.prod .thumbnail').hover(function(){
        //         $(this).find('.items').fadeToggle(500);
                
        //     },function(){
                
        //         $(this).find('.items').fadeToggle(500);
                
        //     } );

        //     }    
        //     else
        //     {
        //         $(this).find('.items').show();
        //     }
            
        // } );
    </script>

</body></html>