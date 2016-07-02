<?php

$result = $this->getDesignerInfo;
if($result == null || $result == "Error")
	{
		echo "No Such Designer!";

	}

$desid = "";
$brandimg = "";
$brandnm = "";
foreach ($result as $row) {
	$desid = $row["brand_id"];
	$brandimg =  $row["brandimg"];
	$brandnm = $row["brandname"];
}

?>

<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Catalogue | Fashonation</title>


    <style type="text/css">
    
    .designimg
    {
    	height:260px;
    	width: 262px;
    	border-radius: 75%;
    	border:9px solid white;
    	margin-left: 145px;
    }

    .ls
    {
    	background-color: rgb(180, 163, 118);
    	color: white;
    	border:0px;
    	padding: 65px;
    	
    }


    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    border-bottom: 5px solid rgb(180, 163, 118)!important;
    color: black!important;
    background-color: transparent!important;
    outline: none;
    transition: all 0.2s ease-in-out;
	}


    .glyphicon {
    font-size: 0.7em;
	}

    @media(max-width: 1200px)
    {
    	.designlbl
    	{
    		margin-top: -70px;
    	
    	}
    	.ls
    	{
    		height: 450px;
    	}

    }



    
    .designlbl
    {

    	font-size: 3em;
    	font-family: Segoe UI;
    	letter-spacing: 1.2px;
    	font-weight: lighter;
    	text-align: center;
    	margin-left: 100px;
    }

    .row
    {
    	margin-right: 0px;
    	margin-bottom: -50px;
    	font-size: 1.2em;
    	/*margin-top: 10px;*/
    }

    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover
    {
    	background-color: rgb(180, 163, 118);
    	color: white;
    	
    }

    .content
    {
    	padding: 75px;
    }

    </style>
    <link rel="stylesheet" href="<?php echo css?>/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo css?>/awesome-bootstrap-checkbox.css">
     <link rel="stylesheet" href="<?php echo css?>/shopcustom.css">
   
</head>

<body>

    
    <!-- Page Content -->
    <div class="row">

        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

            <div class="col-lg-12 ls" style="border: 1px solid #cfcfcf;">
                    <div class="left-sidebar">
                        
                        <div class="col-lg-4 col-lg-offset-1 col-sm-12 col-xs-12 col-md-12">
                        	<img class="designimg" src="<?php echo images.$brandimg ;?>">
                        </div>
                        <div class="col-lg-7 col-sm-12 col-xs-12 col-md-12">
                        	<label class="designlbl"><br/> <?php echo $brandnm; ?></label>
                        </div>
                    </div>
                </div>

            <div class="content col-lg-12">

               
                <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home1">About the designer</a></li>
    <li><a data-toggle="pill" href="#menu1">Products</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home1" class="tab-pane fade in active">
      <h3>About</h3>
      <p>
	    Manish Malhotra has redefined and modernised costumes in Indian cinema. His repertoire includes designing for Bollywood stars, styling them, a diffusion range, bridal and couture. Manish is best known for his bridal wear, and his styling. His strong sense of colour and occasion have made him the first choice of some of the most striking personalities in the Indian film industry, high profile politicians, industrialists, top global corporates and affluent families across the globe.<br/><br/>

		Manish Malhotra started his career as a model, while studying at the Elphinstone College in Mumbai. He revolutionized costume designing and introduced the concept of styling in Bollywood after his first film as a designer for Juhi Chawla starrer Swarg over two decades ago.

      </p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Products Designs By The Designer</h3>
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-xs-12 col-sm-12">
    	
      	<div id="content" class="row">

      	</div>


      </div>
    </div>
  </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  

    <!-- jQuery -->
    <script src="<?php echo js?>/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo js?>/bootstrap.min.js"></script>
    <script type="text/javascript">

    	$('[data-toggle="tooltip"]').tooltip(); 


    			var url = "<?php echo images;?>";

		    $(document).ready(function(){

		        $(".thumbnail").hover(function () {
		            $(this).find("img").attr("src", url+"/2.jpg");
		        },

		        function () {
		            $(this).find("img").attr("src", url+"/1.jpg");
		        });
		    });



 setTimeout(getProduct,3000,<?php echo $desid;?>);


    function getProduct(pid)
    {
       
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("content").innerHTML = xhttp.responseText;

            }
           };
           xhttp.open("POST", "<?php echo url;?>/catlog/getProductFromBrand/"+pid, true);
          xhttp.send();
    }



    	 $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
        });

      
    </script>

</body></html>  