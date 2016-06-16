<?php
$result = $this->getProductInfo;
?>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Catalogue | Fashonation</title>


    <style type="text/css">
    .prod .thumbnail
    {
        border-radius: 0px;
        text-decoration:none;
        cursor: pointer;
        box-shadow: 0px 0px 0px transparent;

    }
    .prod .thumbnail:hover
    {
        box-shadow: 0px 0px 6px rgba(51, 51, 51, 0.7);
    }

    .prod .thumbnail a
    {
        text-decoration:none;
        overflow: hidden;
    }

    .caption
    {
        height: 77px!important;
    }

    .items {
    float: right;
    /*margin-right: -88px;*/
    display: none;
    }

    /*.prod .thumbnail:hover {
    float: right;
    margin-right: 0px;
    transition: all 0.3s ease-in-out;
    }*/

    .items .glyphicon {
        color: grey;
        padding: 5px 5px;
        border: 0px;
    }
    .items .glyphicon:hover {
        color: black;
        transition: all 0.3s ease-in-out;
    }

    .left-sidebar h2, .brands_products h2 {
    color: #000;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    z-index: 3;
    }

    .brands-name .nav-stacked li a {
    background-color: #FFFFFF;
    color: #000;
    font-size: 14px;
    padding: 5px 25px;
    text-decoration: none;
    text-transform: uppercase;
    }

    .brands_products
    {border-bottom: 1px solid black;}
    .brands_products h2:hover
    {
        cursor: pointer;
    }

    input[type=checkbox]
    {
        background-color: transparent;
    }

    .rounded {
    border-radius: 57px;
    margin: 0px 30px;
    width: 20px;
    background-color: #000;
    }

 
    #price1,#price2
    {
        border:1px solid black;
    }
    @media(min-width:768px)
    {
        #price1,#price2
        {
            width:100%;
        }
    }
    
    @media(max-width:768px)
    {
        #price1,#price2
        {
            margin-top: 25px;
            margin-left: 10px;
            width:95%;
        }
    }


    
    </style>
    <link rel="stylesheet" href="<?php echo css?>/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo css?>/awesome-bootstrap-checkbox.css">
    
</head>

<body>

    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3" style="border: 1px solid #cfcfcf;">
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
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#designer" class="collapsed">Designers <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="designer" class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Manish Malhotra</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Neeta Patel</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Anusha Bhatt</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        <br/><br/>
                        <div class="brands_products"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#sportswear" class="collapsed">Category <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="sportswear" class="brands-name panel-collapse collapse">
                                <form method="get" class="form-horizontal">
                                <div class="form-group">
                                <ul class="nav nav-pills nav-stacked">
                                    
                                    <li><a href="#"> 
                                                <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">
                                                            Default
                                                        </label>
                                                        <span class="pull-right">(56)</span>
                                                </div>
                                     </a></li>
                                    <li><a href="#"> 
                                                <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">
                                                            Acne
                                                        </label>
                                                        <span class="pull-right">(56)</span>
                                                </div>
                                     </a></li>
                                     <li><a href="#"> 
                                                <div class="checkbox">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3">
                                                            Albiro
                                                        </label>
                                                        <span class="pull-right">(27)</span>
                                                </div>
                                     </a></li>
                                     <li><a href="#"> 
                                                <div class="checkbox">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4">
                                                            Ronhill
                                                        </label>
                                                        <span class="pull-right">(78)</span>
                                                </div>
                                     </a></li>
                                     
                                </ul>
                                </div>
                                </form>
                                        
                            </div>
                        </div><!--/brands_products-->
                        <br/><br/>
                        

                        <div class="brands_products"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#colorfilters" class="collapsed">Color Filters <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="colorfilters" class="brands-name panel-collapse collapse">
                                   <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-left rounded " style="background-color:black;">&nbsp;</span>Black</a></li>
                                    <li><a href="#"> <span class="pull-left rounded" style="background-color:red;">&nbsp;</span>Red</a></li>
                                    <li><a href="#"> <span class="pull-left rounded" style="background-color:blue;">&nbsp;</span>Blue</a></li>
                                    <li><a href="#"> <span class="pull-left rounded" style="background-color:green;">&nbsp;</span>Green</a></li>
                                    
                                </ul>
                            </div>
                        </div>



                        <br/><br/>




                        <div class="brands_products" style="margin-bottom: 20px;padding-top: 25px;"><!--brands_products-->
                            <h2 data-toggle="collapse" data-parent="#accordian" href="#pricerange" class="collapsed">Price Range <span class="glyphicon glyphicon-menu-down"></span></h2>
                            <div id="pricerange" class="brands-name panel-collapse collapse">
                                <div class="col-lg-5">
                                   <input type="text" placeholder="Rs." style="padding: 5px 5px;" id="price1" />
                                </div>
                                <div class="col-lg-2" style="padding: 5px 5px;">
                                    <b>TO</b>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" style="padding: 5px 5px;" placeholder="Rs." id="price2" />
                                </div>
                                <br/><br/>
                                
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

               
                <div class="row">

                    <?php
                    foreach ($result as $row) {
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
                    


                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->



    <!-- jQuery -->
    <script src="<?php echo js?>/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo js?>/bootstrap.min.js"></script>
    <script type="text/javascript">





    var url = "<?php echo images;?>";

    $(document).ready(function(){

        $(".thumbnail").hover(function () {
            $(this).find("img").attr("src", url+"/2.jpg");
        },

        function () {
            $(this).find("img").attr("src", url+"/1.jpg");
        });
    });





        $(document).ready(function(){
            $('.brands_products h2').click(function(){
                $(this).find('span').toggleClass("glyphicon-menu-down").toggleClass("glyphicon-menu-up");
            },function(){
                $(this).find('span').toggleClass("glyphicon-menu-up").toggleClass("glyphicon-menu-down");   
            });
        });

        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
        });

        $(document).ready(function(){

            viewwidth = $(window).width();
            if(viewwidth > 769)
            {
                $('.prod .thumbnail').hover(function(){
                $(this).find('.items').fadeToggle(500);
                
            },function(){
                
                $(this).find('.items').fadeToggle(500);
                
            } );

            }    
            else
            {
                $(this).find('.items').show();
            }
            
        } );
    </script>

</body></html>