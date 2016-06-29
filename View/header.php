<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo css?>/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   
    <link href="<?php echo css?>/modern-business.css" rel="stylesheet">
    <link href="<?php echo css?>/shop-homepage.css" rel="stylesheet">

    <link href="<?php echo css?>/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo css?>/bootstrap-social.css" rel="stylesheet">
    <link href="<?php echo css?>/nav.css" rel="stylesheet">
     <link href="<?php echo css?>/style.css" rel="stylesheet">
    <link href="<?php echo css?>/reset.css" rel="stylesheet">
    <!-- Dropdown Menu --> 
    <link rel="stylesheet" href="<?php echo css?>/bootstrap.vertical-tabs.css">

    <!-- DropDwown Tab Styles -->
    <!-- <link rel="stylesheet" type="text/css" href="css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="css/tabstyles.css" /> -->
    
    <!-- Slider css -->
    <link rel="stylesheet" type="text/css" href="<?php echo css?>/component.css" />
    <script src="<?php echo js?>/modernizr.custom.js"></script>
    <script src="<?php echo js?>/modernizr.js"></script>
   

    <!-- Products tab slider -->
    <link href="<?php echo css?>/homepage-productSlider.css" rel="stylesheet">

    <!-- cart Component -->
    <link rel="stylesheet" type="text/css" href="<?php echo css?>/cart_component.css" />
    <!-- Font Roboto -->
<!--     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:600' rel='stylesheet' type='text/css'>
 -->    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .offer img{
            width: 70% important;
        }
        ol, ul {
    list-style: none;
}

    </style>
    

    <!--Login Signup functions -->

    <script type="text/javascript">

    function abc(a,b){
        if(a && b)
            document.getElementById("cd-form").submit();
    }

    function def(a,b,c){
        if(a && b && c)
            document.getElementById("cd-reg-form").submit();
    }

    function reset_pass(mail){
        if(mail)
            document.getElementById("reset_pass_form").submit();
        else
            alert("blank");
    }
    function logincheck(id,pwd){
        if(id && pwd){
            document.getElementById("login_button").disabled=false;
            alert("Aa gayi Values");
        }
        else
            document.getElementById("login_button").disabled=true;
    }
    function signupcheck(id,mail,pwd,confirm_pass){
        alert("checking_values");
        if(id && pwd && mail && confirm_pass){
            if(pwd == confirm_pass){
                 document.getElementById("signup_button").disabled=false;
                 alert("Aa gayi Values");
             }
             else
             {
                document.getElementById("signup-confirm_error").innerHTML = "ERROR";
             }
        }
        else{
            document.getElementById("signup_button").disabled=true;
            alert("BLANK FIELDS");
        }
            
    }

    </script>

    <!--Login Signup functions --> 
</head>

<body>


  
    <header class="masthead">
        <div class="container-fluid boxShadow" style="padding: 0px; margin-bottom: 30px;">
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12 nav-items email">
            
                <b><i class="fa fa-envelope" aria-hidden="true"></i> Fashonation@gmail.com</b>
            
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 nav-items searchbox">
            <form role="search" class="search">
                <div class="form-group">
                    <input type="text" id="searchbx" placeholder="Search Here" class="col-md-9 col-lg-9 col-sm-8 col-xs-8">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 nav-items main-nav">
            
            <a href="#0" class="cd-signup"><i class="fa fa-user" aria-hidden="true"></i>    Login</a>
        </div>
        
        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 nav-items cart dropdown1"> <!-- id="cart-drop" -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>    Cart:0</a>
            
              <div class="dropdown-menu cart_dropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>

              <ul role="menu" class="dropdown-menu cart_dropdown" aria-labelledby="drop1">
                <li role="presentation"><a href="#" role="menuitem">Nature</a></li>
                <li role="presentation"><a href="#" role="menuitem">Cell</a></li>
                <li role="presentation"><a href="#" role="menuitem">Science</a></li>
              </ul> -->

              <a href="#" role="button" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><i class="fa fa-shopping-cart" aria-hidden="true"></i>    Cart:0</a>
                  <div class="dropdown-menu row pull-right" role="menu" aria-labelledby="dropdownMenu1">
                    
                           <table class="table cart-dropdown-table">
                               <tr>
                                   <td>
                                       <img src="<?php echo images;?>/cart/1.jpg" class="cart_dropdown_image">
                                   </td>
                                   <td style="width:138px;">
                                       <p>Brooklyn Blues Men's Checkered Casual Shirt</p>
                                       <div class="cart_dropdown_icon"><i class="fa fa-balance-scale"></i>  <p style="margin-left: 36px;">1</p> </div>
                                      

                                   </td>
                                   <td class="cart-dropdown-removeIcon">
                                       <a href="#"> <span class="fa fa-trash fa-2x"></span></a>
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       <img src="<?php echo images;?>/cart/1.jpg" class="cart_dropdown_image">
                                   </td>
                                   <td style="width:138px;">
                                       <p>Brooklyn Blues Men's Checkered Casual Shirt</p>
                                       <div class="cart_dropdown_icon"><i class="fa fa-balance-scale"></i>  <p style="margin-left: 36px;">1</p> </div>
                                      

                                   </td>
                                   <td class="cart-dropdown-removeIcon">
                                       <a href="#"> <span class="fa fa-trash fa-2x"></span></a>
                                   </td>
                               </tr>
                           </table> 
                       
                            <table class="table cart-dropdown-table1">
                                <tbody>
                                    <tr>
                                        <td class="text-left">
                                            Sub-total
                                        </td>
                                        <td class="text-left">
                                            Rs 1,000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left no-td-border">
                                            Discount
                                        </td>
                                        <td class="text-left no-td-border">
                                            Rs 200
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left no-td-border">
                                            Tax
                                        </td>
                                        <td class="text-left no-td-border">
                                            Rs 100
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <b>TOTAL</b>
                                        </td>
                                        <td class="text-left">
                                            <b>Rs 900</b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="no-td-border cart-dropdown-button">
                                            <span class="button"><span class="fa fa-eye"> View Cart</span>
                                        </td>
                                        <td class="no-td-border cart-dropdown-button">
                                            <span class="button"><span class="fa fa-share"> Checkout</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                  </div>
        </div>
        </div>
        <div class="container namebar">
        <a href="#"><img class="img-responsive" src="<?php echo images;?>/logo/namelogo4.png" height="33%" width="33%"> <!-- FASHONATION --></a>
    </div>
    </header>

<!--     <header class="masthead">
        <div class="container-fluid boxShadow" style="padding: 0px; margin-bottom: 30px;">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nav-items">
            <b><i class="fa fa-envelope" aria-hidden="true"></i> Fashonation@gmail.com</b>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 nav-items searchbox">
            <form role="search" class="search">
                <div class="form-group">
                    <input type="text" id="searchbx" placeholder="Search Here" class="col-md-9 col-lg-9 col-sm-8 col-xs-8">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 nav-items">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-user" aria-hidden="true"></i>    Login/Signup</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 nav-items cart">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>    Shopping Cart</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 nav-items cart">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>    Whislist</a>
        </div>
        </div>
        <div class="container namebar">
        <a href="#"><img class="img-responsive" src="namelogo(blackdark).png" height="33%" width="33%"> FASHONATION</a>
    </div>
    </header> -->

    <!--Navbar -->
    

    <nav id="nav" class="navbar yamm navbar-inverse navbar-static" role="navigation">
    
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <!-- <img src="logo.png" height="50%" width="50%"> -->
          </button>
          <!-- <a class="navbar-brand" href="#">
            <img class="img-responsive" src="namelogo(blackdark).png">
          </a> -->
          <!-- <a class="navbar-brand" href="#">FASHONATION</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <div class="collapse navbar-collapse navbar_items" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
            <li><a href="#">DESIGNERS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CLOTHES</a>
              <div class="dropdown-menu col-lg-12" role="menu">
                <div class="col-xs-4 tabs tabs-hovereffect"> 
                <!-- <div class="col-xs-4 tabs tabs-hovereffect"  style="background-color:rgba(222, 222, 222, 0.71); height:100%;padding-right:0px;">  -->
                  <ul class="nav nav-tabs tabs-left ">
                    <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-male fa-3x" aria-hidden="true"></i>
                            
                            </div>
                            <a href="#home" data-toggle="tab"><span>Men's Wear
                            <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span>
                            </a>
                          </div>
                    </li>

                    <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-female fa-3x" aria-hidden="true"></i>
                            
                            </div>
                            <a href="#profile" data-toggle="tab"><span>Women's Wear
                            <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span>
                            </a>
                          </div>
                    </li>

                    <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-child fa-3x" aria-hidden="true"></i>
                            
                            </div>
                            <a href="#occasion" data-toggle="tab"><span>Shop by Occassion
                            <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span>
                            </a>
                          </div>
                    </li>

                    <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
                            
                            </div>
                            <a href="#designer" data-toggle="tab"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop by Designer & Brand
                            <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span>
                            </a>
                          </div>
                    </li>
                    
                    <!-- <li class="active"><a href="#home" data-toggle="tab">Men's Wear</a></li> -->
                    <!-- <li><a href="#profile" data-toggle="tab">Womens's Wear</a></li> -->
                  </ul> 
                </div>

                <div class="col-xs-8 tab-bg-image mob-view">
                  <!-- Tab panes -->

                  <div class="tab-content ">
                    <div class="tab-pane active" id="home">
                        <div class="col-xs-6 col-lg-6">

                            <div class="col-xs-2 col-lg-3">
                               <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                            </div>

                            <div class="col-xs-2 col-lg-3 tab-content-align">
                           <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                                </div>    

                            
                        </div>
                        <div class="col-xs-3 col-lg-3 dropdown-image">
                            <img class="img-responsive" src="<?php echo images;?>/featured/image1.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="col-xs-6 col-lg-6">

                            <div class="col-xs-2 col-lg-3">
                               <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                            </div>

                            <div class="col-xs-2 col-lg-3 tab-content-align">
                           <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                                </div>    

                            
                        </div>
                        <div class="col-xs-3 col-lg-3 dropdown-image">
                            <img class="img-responsive" src="<?php echo images;?>/featured/image6.jpg" alt="">
                        </div>
                    </div>
                  </div>    
                
              </div>
              <!-- <section>
                <div class="tabs tabs-style-circlefill">
                    <nav>
                        <ul>
                            <li><a href="#section-circlefill-1" class="icon icon-plug"><span>Connect</span></a></li>
                            <li><a href="#section-circlefill-2" class="icon icon-gift"><span>Gifts</span></a></li>
                            <li><a href="#section-circlefill-3" class="icon icon-box"><span>Boxes</span></a></li>
                            <li><a href="#section-circlefill-4" class="icon icon-date"><span>Prints</span></a></li>
                            <li><a href="#section-circlefill-5" class="icon icon-plane"><span>Fun</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-circlefill-1"><p>1</p></section>
                        <section id="section-circlefill-2"><p>2</p></section>
                        <section id="section-circlefill-3"><p>3</p></section>
                        <section id="section-circlefill-4"><p>4</p></section>
                        <section id="section-circlefill-5"><p>5</p></section>
                    </div>
                </div>
            </section> -->
            </li>
        
            <li><a href="#">ACCESSORIES</a></li>
            <li><a href="#">BLOG</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<!-- Login modal popup -->


<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>

            <div id="cd-login"> <!-- log in form -->
                <form class="cd-form" id="cd-form" action="login/run" method="POST">
                    <p class="fieldset">
                        <label class="image-replace cd-email" name="mail" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" onchange="logincheck(document.getElementById('signin-email').value,document.getElementById('signin-password').value)" id="signin-email" name='mail' type="text" placeholder="E-mail">
<!--                        <span class="cd-error-message">Error message here!</span>-->
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" name="password" type="text"  placeholder="Password" onchange="logincheck(document.getElementById('signin-email').value,document.getElementById('signin-password').value)">
                        <a href="#0" class="hide-password">Hide</a>
<!--                        <span class="cd-error-message">Error message here!</span>-->
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="fieldset">
                        <input type="button" class="btn-default" id="login_button" value="Login" onclick="abc(document.getElementById('signin-email').value,document.getElementById('signin-password').value)">
                    </p>
                </form>
                
                <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-login -->

            <div id="cd-signup"> <!-- sign up form -->
                <form class="cd-form" id="cd-reg-form" action="registration/run" method="POST">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" onchange="signupcheck(document.getElementById('signup-username').value,document.getElementById('signup-email').value,document.getElementById('signup-password').value,document.getElementById('confirm').value)" name="username" type="text" placeholder="Username">
                        <span class="cd-error-message" id="signup-username_error">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" name="email" type="text" placeholder="E-mail" onchange="signupcheck(document.getElementById('signup-username').value,document.getElementById('signup-email').value,document.getElementById('signup-password').value,document.getElementById('confirm').value)" >
                        <span class="cd-error-message" id="signup-email_error">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" name="pass" type="text"  placeholder="Password" onchange="signupcheck(document.getElementById('signup-username').value,document.getElementById('signup-email').value,document.getElementById('signup-password').value,document.getElementById('confirm').value)" >
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Confirm Password</label>
                        <input class="full-width has-padding has-border" id="confirm" name="confirm" type="text"  placeholder="Confirm Password" onchange="signupcheck(document.getElementById('signup-username').value,document.getElementById('signup-email').value,document.getElementById('signup-password').value,document.getElementById('confirm').value)" >
                        <a href="#0" class="hide-password">Hide</a>
                        <p class="cd-error-message" id="signup-confirm_error">Error message here!</p>
                    </p>                    

                    <!-- <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p> -->

                    <p class="fieldset">
                        <input class="full-width has-padding btn-default" type="button" id="signup_button" value="Create account"  onclick="def(document.getElementById('signup-username').value,document.getElementById('signup-email').value,document.getElementById('signup-password').value)">
                    </p>

                    <p class="fieldset">
                        <p class="full-width has-padding has-border" style="border-radius:100px;"><center>OR</center></p>
                    </p>


                    <p class="fieldset">
                        <p class="full-width has-padding has-border">
                            <div class="container">
                                <div class="col-sm-8 col-md-8 col-lg-8 col-xs-8">
                                <div class="col-sm-2 col-xs-3 col-lg-2">
                                        <img class="img-responsive" src="<?php echo images;?>/facebook-button.png" height="75%" width="75%">
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="<?php echo images;?>/googleplus-button.png" height="75%" width="75%">
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="<?php echo images;?>/twitter-button.png" height="75%" width="75%">
                                </div>
                                 <div class="col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="<?php echo images;?>/linkedin-button.png" height="75%" width="75%">
                                </div>
                            </div>
                            </div>

                            
                    </p>
                </form>

                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-signup -->

            <div id="cd-reset-password"> <!-- reset password form -->
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form" id="reset_pass_form" method=POST>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset_email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="button" onclick="reset_pass(document.getElementById('reset_email').value)" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->

    
<!-- Login modal popup -->


    <!--Cart modal popup -->

    <div class="md-modal md-effect-7" id="modal-7">
            <div class="md-content">
                <h3>Shopping Cart</h3>
                <div>
                    <table class=table>
                      <th> ABC </th>
                      <th> DEF </th>
                      <th> ABC </th>
                      <th> DEF </th>

                      <tr>
                        <td>1</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        </tr><tr>
                        <td>1</td>
                        </tr><tr>
                        <td>1</td>
                        </tr><tr>
                        <td>1</td>
                        </tr><tr>
                        <td>1</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>


        <div class="md-overlay"></div><!-- the overlay element -->
<script src="<?php echo js?>/jquery.min.js"></script>
<script src="<?php echo js?>/main.js"></script>
        
    
    <!--Navbar -->
    
    <!-- cart JS -->

      <!--  <script src="<?php echo js?>/classie.js"></script>
       <script src="<?php echo js?>/cart_modalEffects.js"></script>
       <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/js/';
        </script>
        <script src="<?php echo js?>/cart_cssParser.js"></script>
        <script src="<?php echo js?>/cart_css-filters-polyfill.js"></script>  -->


        <script type="text/javascript">
            // $(document).ready(function(){
            //     $("#cart-drop").click(function(){
            //        $('.dropdown-menu', this).stop(true, true).slideUp(0).slideDown('slow');
            //        $(this).addClass('open');
            //       }, function() {
            //         $('.dropdown-menu', this).stop(true, true).fadeOut('fast');
            //         $(this).removeClass('open');
                    
            //     });       
            // });

            // $(document).ready(function() {    
            //     $('#cart-drop').click(function() {
            //         $('.dropdown-menu', this).stop(true, true).slideUp(0).slideDown('slow');
            //             $(this).addClass('open');
            //     });

            //     $("#cart-drop").click(function(event) {
            //        if ($(".dropdown-menu").hasClass('open'))
            //        {  $(".dropdown-menu").slideUp();  }
            //     });
            // });
        </script>
    <!-- cart JS -->



