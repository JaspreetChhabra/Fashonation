<?php


include_once './productHandler.php';
$product = new productHandler();
$product->getAllProducts();
?>


<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/nav.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .panel
    {background-color: #fff;border:1px solid black;}
    .panel-group .panel{border-radius: 0px;}
    .panel-default>.panel-heading {
    color: #000;
    background-color: #fff;
    border-color: #000;    border-bottom: 1px solid black;}
    .panel-title>.small, .panel-title>.small>a, .panel-title>a, .panel-title>small, .panel-title>small>a
    {padding: 5px;
    text-decoration: none;}
    .collapseWill i {
    transition: all .3s ease;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    margin-right: 5px;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
}
    .rot{   transform: rotate(50deg);}
    body{
    background-color: rgba(221, 221, 221, 0.36);}
    .thumbnail
    {    box-shadow: 0px 1px 9px black;
     border-radius: 0px;}

     .buy
     {    background-color: rgba(0, 0, 0, 0.76);color: #fff;}
     .buy:focus,.buy:active,.buy:hover
     {color: #fff;background-color: #000;}
    .btnbuy {
    width: 103%;
    border-radius: 0px;
    margin-left: -4px;
    border: 1px solid #ddd;
    padding: 9px 12px;
    margin-bottom: -6px;
    }
    
/*    #chck
    {
        cursor: pointer;
    }*/
    </style>
    
    <script type="text/javascript">
        
        function submitForm(id){
            alert("Called with ID " +id);
            document.getElementById('pid').value=id;
            document.getElementById('catalog').submit();
        }
    </script>
</head>

<body>
<form id="catalog" action="#" method="POST">
                        
                    

   <header class="masthead">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="infosec" class="col-lg-3 col-lg-offset-0 col-md-3 col-sm-4">
            <div>Email: FashoNation@gmail.com<br></div>
            <div>PhoneNumber: 9033808520</div>
        </div>
        <div id="fullnmlogo" class="col-lg-3 col-lg-offset-1 col-md-offset-0 col-md-3 col-sm-4">
            <!--<h1 style="color:white;"> FASHONATION  </h1>-->
            <a href="#"><img class="img-responsive" src="namelogo.png"></a>
        </div>
        <div class="col-lg-4  col-md-offset-1 col-md-4 col-sm-4">
            <form class="navbar-form navbar-left col-lg-12 col-sm-12 col-md-12" role="search">
                <div class="form-group">
                    <input type="text" id="searchbx" placeholder="Search Here" class="col-md-10 col-lg-9">
                    <!-- <input type="text" id="searchbx" class="form-control" placeholder="Search Here"> -->
                    <button type="submit" class="btn btn-default col-md-2"><span class="glyphicon glyphicon-search"></span></button>
                </div>
                
            </form>
        </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav id="nav" class="navbar yamm navbar-inverse navbar-static-top affix" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <a id="logolink" href="index.html">FASHONATION</a>
     
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    
                                 <div class="col-lg-6">
                                    <div class="col-lg-6">
                                        <a href="portfolio-1-col.html">hehehehe</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="portfolio-1-col.html">vvvvvvvvvvv</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6">
                                        <a href="portfolio-1-col.html">hehehehe</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="portfolio-1-col.html">vvvvvvvvvvv</a>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">
                                    <div class="col-lg-6" >
                                        <a href="portfolio-1-col.html">hehehehe</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="portfolio-1-col.html">vvvvvvvvvvv</a>
                                    </div>
                                </div>
                                </div>
                                    
</li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a data-toggle="modal" data-target="#myModal">Login/Signup</a>
                    </li>
                    <li>
                        <a href="services.html">Cart</a>
                    </li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header Carousel -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <!-- <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div> -->

                <div class="col-lg-12 col-md-12 col-sm-12">
<div class="panel-group" id="accordionNo">
 
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a data-toggle="collapse" href="#collapseCategory" class="collapseWill active collapsed" aria-expanded="false">
<span class="pull-left"> <i id="carrt" class="fa fa-caret-right"></i></span> Category </a></h4>
</div>
<div id="collapseCategory" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body">
<ul class="nav nav-pills nav-stacked tree">
<li class="active dropdown-tree open-tree"><a class="dropdown-tree-a"> <span class="badge pull-right">42</span> WOMEN COLLECTION </a>
<ul class="category-level-2 dropdown-menu-tree">
<li class="dropdown-tree"><a class="dropdown-tree-a" href="sub-category.html">
Tshirt</a></li>
<li><a> Shoes</a></li>
<li><a> Shirt</a></li>
<li><a>T shirt</a></li>
<li><a href="sub-category.html"> Shirt</a></li>
<li><a href="sub-category.html">Fragrances</a></li>
<li><a href="sub-category.html">Scarf</a></li>
<li><a href="sub-category.html">Sandal</a></li>
<li><a href="sub-category.html">Underwear</a></li>
<li><a href="sub-category.html">Winter Collection</a></li>
<li><a href="sub-category.html">Men Accessories</a></li>
</ul>
</li>
<li><a href="#"> <span class="badge pull-right">42</span> MEN COLLECTION </a></li>
<li><a href="#"> <span class="badge pull-right">42</span> Baby &amp; Kids </a></li>
<li><a href="#"> <span class="badge pull-right">42</span> Home &amp; Kitchen </a></li>
<li><a href="#"> <span class="badge pull-right">42</span> Baby &amp; Kids </a></li>
<li><a href="#"> <span class="badge pull-right">42</span> More Stores </a></li>
<li><a href="#"> <span class="badge pull-right">42</span> Offers Zone </a></li>
</ul>
</div>
</div>
</div>
 
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a class="collapseWill active collapsed" data-toggle="collapse" href="#collapsePrice" aria-expanded="false">
Price <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
</div>
<div id="collapsePrice" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body priceFilterBody">
 
<label>
<input type="radio" name="agree" value="0">
100$ - 500$</label>
<br>
<label>
<input type="radio" name="agree" value="1">
500$ - 1000$</label>
<br>
<label>
<input type="radio" name="agree" value="2">
1000$ - 1500$</label>
<br>
<label>
<input type="radio" name="agree" value="3">
1500$ - 2000$</label>
<br>
<label>
<input type="radio" name="agree" value="4">
2000$ - 2500$</label>
<br>
<label>
<input type="radio" name="agree" value="5">
2500$ - 3000$</label>
<br>
<label>
<input type="radio" name="agree" value="6" disabled="" checked="">
Don't know</label>
<hr>
<p>Enter a Price range </p>
<form class="form-inline " role="form">
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail2" placeholder="2000 $">
</div>
<div class="form-group sp"> -</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputPassword2" placeholder="3000 $">
</div>
<button type="submit" class="btn btn-default pull-right">check</button>
</form>
</div>
</div>
</div>
 
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a data-toggle="collapse" href="#collapseBrand" class="collapseWill active collapsed" aria-expanded="false">
Brand <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
</div>
<div id="collapseBrand" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body smoothscroll maxheight300 mCustomScrollbar _mCS_3" style="overflow: hidden;"><div class="mCustomScrollBox mCS-dark-2" id="mCSB_3" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 300px;"><div class="mCSB_container" style="position:relative; top:0;">
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="0">
Armani </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="1">
Gucci </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="2">
Louis Vuitton </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Chanel </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Roberto Cavalli </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Valentino </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Ralph Lauren </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Miu Miu </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
McQueen </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
adidas </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Nike </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Jimmy Choo </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Bottega Veneta </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Donna Karan </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Oscar de la Renta </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Tods </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Burberry </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Michael Kors </label>
</div>
<div class="block-element">
<label>
<input type="checkbox" name="tour" value="3">
Mulberry </label>
</div>
<div class="block-element">
<label> &nbsp; </label>
 
</div>
</div><div class="mCSB_scrollTools" style="position: absolute; display: block;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; height: 161px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position: relative; line-height: 161px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
</div>
</div>
 

 

 
</div>
</div>




            </div>

            <div class="col-md-9">

                

                <div class="row">
                    
<?php
$d = $product->getAllProducts();
//echo $d;

while($res = $d->fetch_assoc()){
    $iid = $res['product_id'];
$img = $product->getImage($res['product_id']);
//$i = $img->fetch_assoc();
$im = $img['image1_url'];
//echo "<img src=".$img['image1_url'].">";
        
     echo "         
                    <div class='col-sm-4 col-lg-4 col-md-4'>
                    <input type=hidden id='pid'>
                        <div class='thumbnail'>
                            <img class='img-resposive' height='100px' src='$im' alt=''>
                            <div class='caption'>
                                <h4 class='pull-right'>".$res['product_cost']." Rs</h4>
                                <h4><a href='#' onclick='submitForm($iid)'>".$res['product_name']."</a>
                                </h4>
                                
                            </div>
                            
                            <div>
                                <button class='btn btnbuy'>Buy Now</button>
                            </div>
                            
                        </div>
                    </div>";
}
     ?>
                   
                    
                </div>

            </div>

        </div>

    </div>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        });



    $('#nav').affix({
        offset: {
            top: $('header').height()
        }
    });


    $(document).ready(function () {
        $(".dropdown, .btn-group").hover(function () {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });


    $(document).ready(function () {
        $("#collapseCategory").click(function () {
            
                $('carrt').addClass("rot");
            
        });
    });


    </script>


</form>

</body></html>
