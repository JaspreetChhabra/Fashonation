<?php
$result = $this->getProductFromBand;
	if($result == null || $result == "Error")
	{
		echo "No products to display!";
	}
	else
	{
		


			        foreach ($result as $row) {

                        $data = array(
                            'id' => $row["product_id"],
                            'name' => $row["product_name"],
                            'image' => '1.jpg',
                            'price' => $row["product_selling_price"],
                            'discount' => '0',
                            'qty' => '1'
                            );
			        	
                        $encodedData = base64_encode($row['product_id'].','.$row['product_name'].','.$row['product_selling_price'].','.'1.jpg'.','.'1'.',0');

echo "
                   <div class= 'prod col-sm-12 col-xs-12 col-lg-4 col-md-4' >
                        <div class= 'thumbnail' >
                       
                         
                        <img src= ".images."/1.jpg  class= 'img-responsive'  height= '100' >
                         

                        <div class= caption >
                                <div style= padding-left: 0px;  class= 'pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12' >
                                    <h4 style= whitespace:normal;  class= 'col-lg-12 col-md-12 col-sm-10 col-xs-10'  ><a href= # >".  $row[ 'product_name' ]." </a></h4>
                                    <h4 class= 'col-lg-12 col-md-12 col-sm-10 col-xs-10' >Rs "
                                    . $row[ 'product_selling_price' ]
                                    .".  &nbsp;&nbsp;<s>Rs ". $row[ 'product_mrp' ].".</s></h4> <br/>  
                                </div>
                                
                            </div>
                            <div class= 'ratings' >
                                <p class='pull-right items'>
                                    <a href='#' data-toggle='tooltip' data-placement='top' title='' data-original-title='Add to cart'>
                                    <a class='cartBtn' data-toggle='tooltip' data-placement='top' title='' data-original-title='Add to cart' data-size='39' data-id='".$row['product_id']."' data-product='".$encodedData."'>
                                    <span class='glyphicon glyphicon-shopping-cart'></span> 
                                    </a>
                                    <a href='#' data-toggle='tooltip' data-placement='top' title='' data-original-title='Add to wishlist'>
                                    <span class='glyphicon glyphicon glyphicon-heart'></span> 
                                    </a>
                                    <a href='#' data-toggle='tooltip' data-placement='top' title='' data-original-title='Share product'>
                                    <span class='glyphicon glyphicon-share'></span> 
                                    </a>
                                    <a href='#' data-toggle='tooltip' data-placement='top' title='' data-original-title='Product Overview'>
                                    <span class='glyphicon glyphicon-eye-open'></span> 
                                    </a>
                                </p>
                                <p>
                                    <span class= 'glyphicon glyphicon-star' ></span>
                                    <span class='glyphicon glyphicon-star' ></span>
                                    <span class= 'glyphicon glyphicon-star' ></span>
                                    <span class= 'glyphicon glyphicon-star' ></span>
                                    <span class= 'glyphicon glyphicon-star' ></span>
                                </p>
                            </div>
                        </div>
                    </div>


                    ";
					}
                    
                    echo "
                    <script>
                     $(document).ready(function(){
                     $('[data-toggle='tooltip']').tooltip(); 
                     });
                     </script>
                    ";







	}
?>