<?php 

	$result = $this->fetchProductDetails;
	if($result == null || $result == "Error")
	{
		echo "Sorry !! Please Try Again.";

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
					<img src="<?php echo images;?>/products/1.jpg" class="img-responsive sampleImage small-image-border"  id="1">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail ">
					<img src="<?php echo images;?>/products/2.jpg" class="img-responsive sampleImage whiteBorder" id="2">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img src="<?php echo images;?>/products/3.jpg" class="img-responsive sampleImage whiteBorder"  id="3">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img src="<?php echo images;?>/products/4.jpg" class="img-responsive sampleImage whiteBorder" id="4">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-7 col-xs-2 small-thumbnail">
					<img src="<?php echo images;?>/products/5.jpg" class="img-responsive sampleImage whiteBorder" id="5">
				</div>
			</div>
			
			<div class="col-lg-10 col-md-10 col-sm-9 col-xs-10 big-thumbnail">
				<img src="<?php echo images;?>/products/1.jpg" class="img-responsive" id="mainImage">
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

	            <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Write a Review</a>
	        </p>
	        <p class="col-lg-12 col-md-12 col-sm-10 col-xs-10"><?php echo $row["product_desc"];?></p>
	        <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
	        <p>Select Quantity</p>
	        	<p><button  class="btn cartAddBtn increseQty" id="btn" onclick=""><i class="fa fa-minus"></i></button>  
	        		<span class='qtyspan' id=''> 1 </span>
	        	<button class="btn cartAddBtn decreaseQty"  id="btn" onclick=""><i class="fa fa-plus"></i></button>
	        	</p>
	        </div>
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <p>Select Size</p>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn selected" id="1">S</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn" id="2">M</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv" >
	        		<button class="btn sizeBtn" id="3">L</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn" id="4">XL</button>
	        	</div>
	        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 sizeDiv">
	        		<button class="btn sizeBtn"  id="5">XXL</button>
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

<script>
	
	$(document).ready(function(){
		var oldIdSelecetd = 1;
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

            if(oldImageSelected != newImageSelected){
            	$('#'+newImageSelected).removeClass('whiteBorder');
            	$('#'+newImageSelected).addClass('small-image-border');
	        	$('#'+oldImageSelected).removeClass('small-image-border');
	        	$('#'+oldImageSelected).addClass('whiteBorder');
	        	oldImageSelected = newImageSelected;
            }
        })
    });
</script>
</body>
</html>