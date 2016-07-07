<?php 

	$result = $this->fetchProductDetails;
	if($result == null || $result == "Error")
	{
		echo "<h1 class='text-center'>No Such Product</h1><br/><br/>";
		echo "<h3 class='text-center'><a style='text-decoration:none;' href= ".url."/home>Click to redirect back</a></h3>";
		die();
		//header("location:".url."/error");
	}

	foreach ($result as $row) {
			
	}
?>

<style>
	
	header{
		margin-top: -30px;
	}
</style>

<body>

<div class="container" id="productDetailsCont">
	<div class="row no-gutters">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img data-zoom-image="<?php echo images;?>/products/1.jpg" src="<?php echo images;?>/products/1.jpg" class="img-responsive sampleImage small-image-border"  id="1">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail ">
					<img data-zoom-image="<?php echo images;?>/products/2.jpg" src="<?php echo images;?>/products/2.jpg" class="img-responsive sampleImage whiteBorder" id="2">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img data-zoom-image="<?php echo images;?>/products/3.jpg" src="<?php echo images;?>/products/3.jpg" class="img-responsive sampleImage whiteBorder"  id="3">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img data-zoom-image="<?php echo images;?>/products/4.jpg" src="<?php echo images;?>/products/4.jpg" class="img-responsive sampleImage whiteBorder" id="4">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img data-zoom-image="<?php echo images;?>/products/5.jpg" src="<?php echo images;?>/products/5.jpg" class="img-responsive sampleImage whiteBorder" id="5">
				</div>
			</div>
			
			<div class="col-lg-10 col-md-10 col-sm-9 col-xs-10 big-thumbnail">
				<img  src="<?php echo images;?>/products/1.jpg" data-zoom-image="<?php echo images;?>/products/1.jpg" class="img-responsive" id="mainImage">
			</div>		
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 productcontent">
			<h1 class="col-lg-12 col-md-12 col-sm-10 col-xs-10 product_title"><?php echo $row['product_name'];?></h1><br>
			<h3 class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
				<b><i>
				Rs <?php echo $row["product_selling_price"];?>
				</i></b>&nbsp;&nbsp;
				<s>Rs <?php echo $row["product_mrp"];?></s>
			</h3>
			<br>
			
			<p class="col-lg-12 col-md-12 col-sm-10 col-xs-10 rating">
	            <span class="glyphicon glyphicon-star"></span>
	            <span class="glyphicon glyphicon-star"></span>
	            <span class="glyphicon glyphicon-star"></span>
	            <span class="glyphicon glyphicon-star"></span>
	            <span class="glyphicon glyphicon-star"></span>

	            <a href="#" onclick="checkLogin()">&nbsp;&nbsp;&nbsp;&nbsp;Write a Review</a>
	        </p>
	        <p class="col-lg-12 col-md-12 col-sm-10 col-xs-10"><?php echo $row["product_desc"];?></p>
	        <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
	        <p>Select Quantity</p>
	        	<p><button  class="btn cartAddBtn decreaseQty" id="btn" onclick="addQty()"><i class="fa fa-minus"></i></button>  
	        		<span class='qtyspan' id='proqty'> 1 </span>
	        	<button class="btn cartAddBtn increseQty"  id="btn" onclick="subQty()"><i class="fa fa-plus"></i></button>
	        	</p>
	        </div>
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <p>Select Size</p>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn selected" id="sizebtn1">S</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn" id="sizebtn2">M</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv" >
	        		<button class="btn sizeBtn" id="sizebtn3">L</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn" id="sizebtn4">XL</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn"  id="sizebtn5">XXL</button>
	        	</div>
	        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 rating sizeChartBtn">
	        		<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;View Size Chart</a>
	        	</div>
	        </div>
	        <br>
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        	<p style="margin-bottom:0px; margin-top:20px;">(Free Delivery)</p>
	        </div>
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shopButton">
	        	<span class='button'><span class="glyphicon glyphicon-shopping-cart"></span>  Add To Cart</span>
	        </div>

	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shopButton1">
	        	<span class='button'><span class="glyphicon glyphicon-heart"></span>  Add To Wishlist</span>
	        </div>
	        
		</div>
	</div>
</div>



<!--Submit Review Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Write a review</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for your awesome review.</p>
        <form onsubmit="false">
        	<br/>
        	<input class="form-control" type="text" placeholder="Write review here" id="review" />
        	<br/>
        	<br/>
		<p>Please give your rating.</p>        	
        <input type="text" class="rating rating-loading" value="5" data-size="xs" title="">
        <br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="getValues()" data-dismiss="modal">Sumit</button>
      </div>
    </div>

  </div>
</div>





<script src="<?php echo js?>/jquery.elevatezoom.js"></script>
<script>

	function addQty(){
		qty = Number(document.getElementById("proqty").value);
        if(qty<8){
            qty = Number(qty)+ Number(1);
            // grand_total = document.getElementById("total").innerHTML;
            // //alert("old GTOTAL"+grand_total);
            // grand_total = Number(grand_total) + Number(document.getElementById('p'+pid).innerHTML);
            //  //alert("new GTOTAL"+grand_total);
            // price = Number(document.getElementById('t'+pid).innerHTML)+ Number(document.getElementById('p'+pid).innerHTML);
            // //alert("Price"+price);
        }
        else
        {alert("You cannot order more than 8 quantity at once");
         }document.getElementById('proqty').innerHTML = qty;
        // document.getElementById('t'+pid).innerHTML = price;
        //  document.getElementById("total").innerHTML = grand_total;
 
     }
function subQty(){
        qty = Number(document.getElementById("proqty").value);
        if(qty > 1){
            qty = Number(qty) -  Number(1);
            // grand_total = document.getElementById("total").innerHTML;
            // //alert("old GTOTAL"+grand_total);
            // grand_total = Number(grand_total) + Number(document.getElementById('p'+pid).innerHTML);
            //  //alert("new GTOTAL"+grand_total);
            // price = Number(document.getElementById('t'+pid).innerHTML)+ Number(document.getElementById('p'+pid).innerHTML);
            // //alert("Price"+price);
        }
        else
        {alert("Quantity must be greater than 0");
         }document.getElementById('proqty').innerHTML = qty;
        // document.getElementById('t'+pid).innerHTML = price;
        //  document.getElementById("total").innerHTML = grand_total;
 
       
     }




    $('#mainImage').elevateZoom({
    // zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750
   }); 
</script>
<script>
	
	$(document).ready(function(){
		var oldIdSelecetd = "sizebtn1";
        $('.sizeBtn').click(function(){
        	var newIdSelected = $(this).attr('id');

        	if(newIdSelected != oldIdSelecetd){
        		$('#'+newIdSelected).addClass('selected');
	        	$('#'+oldIdSelecetd).removeClass('selected');
	        	oldIdSelecetd = newIdSelected;
        	}
        	
        });

        var oldImageSelected = 1;
        $('.sampleImage').hover(function(){
        	var src = $(this).attr('src');
        	var newImageSelected = $(this).attr('id');
            $('#mainImage').attr("src", src);
            $('#mainImage').attr("data-zoom-image", src);


            if(oldImageSelected != newImageSelected){
            	$('#'+newImageSelected).removeClass('whiteBorder');
            	$('#'+newImageSelected).addClass('small-image-border');
	        	$('#'+oldImageSelected).removeClass('small-image-border');
	        	$('#'+oldImageSelected).addClass('whiteBorder');
	        	oldImageSelected = newImageSelected;
            }

			 $('.zoomWindow').css('background-image', 'url(' + src + ')');


        })
    });



    function checkLogin(){

    	var loginChk = true;
    	if(loginChk)
    	{
    		$("#myModal").modal();
    	}

    }

    function getValues()
    {
    	reviewval = document.getElementById("review").value;
    	rat = document.getElementById("").value;
    }


</script>
<link rel="stylesheet" href="<?php echo css?>/star-rating.css" media="all" type="text/css"/>
<script src="<?php echo js?>/star-rating.js" type="text/javascript"></script>
</body>
</html>