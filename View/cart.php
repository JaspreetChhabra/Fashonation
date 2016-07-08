<?php

    ?>
    <head>
     <style type=text/css>



    .link{
        color: #000;
        text-decoration: none;
        font-weight: bold;
    }

    .link:hover{
        color: rgb(171, 128, 113);
        cursor: pointer;
        font-weight: bolder;
        text-decoration: none;

    }



    td{
        vertical-align: middle !important;
        max-width: 40px;
    }

    #btn{
        background-color: rgb(180, 163, 118);
        border-radius: 0px;
        height: 40px;
        width: 40px;
    }
   

    .top{

        background-color:rgb(180, 163, 118);
        color:#fff;
    }


     </style>   
     <script type="text/javascript">
     function addQty(qty,pid){
        if(qty<9){
            qty = Number(qty)+ Number(1);
            grand_total = document.getElementById("total").innerHTML;
            //alert("old GTOTAL"+grand_total);
            grand_total = Number(grand_total) + Number(document.getElementById('p'+pid).innerHTML);
             //alert("new GTOTAL"+grand_total);
            price = Number(document.getElementById('t'+pid).innerHTML)+ Number(document.getElementById('p'+pid).innerHTML);
            //alert("Price"+price);
        }
        else
            alert("You cannot order more than 8 quantity at once");
        

        document.getElementById('quant'+pid).innerHTML = qty+" ";
        document.getElementById('t'+pid).innerHTML = price;
         document.getElementById("total").innerHTML = grand_total;

        
        
       
     }


    function compute_total(qty,price,pid){
        total = Numver(qty) * Number(price);
        document.getElementById("total").innerHTML = total;
    }

    function subQty(qty,pid){
        if(qty>1){
            qty = Number(qty)- Number(1);
            grand_total = document.getElementById("total").innerHTML;
           
            grand_total = Number(grand_total) - Number(document.getElementById('p'+pid).innerHTML);
            price = Number(document.getElementById('t'+pid).innerHTML)- Number(document.getElementById('p'+pid).innerHTML);
        }
         else
            alert("Quantity must be greaater than ZERO");
        document.getElementById('quant'+pid).innerHTML = qty+" ";
        document.getElementById('t'+pid).innerHTML = price;
         document.getElementById("total").innerHTML = grand_total;
       
     }

     </script>
    </head>
        <body>
               
                <div class="col-lg-12">
                    
                        <table class="table" style="margin-top:20px;">       <!--responsive-->

                            <tr class=top>
                                <th> Product Image</th>
                                <th> Product name </th>
                                <th> Product quantity </th>
                                <th> Product price </th>
                                <th>total</th>
                                <th>logo</th>
                            </tr>

                            <?php 

                            $gtotal = 0;
                            foreach ($_SESSION['cart'] as $value) {
                          
                               $a = explode(",",$value);
                               
                                $id = $a[0];//$row['cart_id'];
                                $qid="quant".$a[0];//$row['cart_id'];
                                $priceid="p".$a[0];//$row['cart_id'];
                                $totalid="t".$a[0];//$row['cart_id'];
                                
                                ?>

                    <tr>
                                
                                <input type='hidden' name='pid' id='pid' value=<?php echo $a[0]; ?>>
                                <td><img class="img-responsive" src='<?php echo images?>/1.jpg' height=150px width=100px;></td>
                                <td><a class="link"> <?php echo $a[1] ?></a></td>
                                <td ><button  class="btn btn-success" id="btn" onclick="subQty(document.getElementById('<?php echo $qid; ?>').innerHTML , <?php echo $id; ?>)">-</button>  <span class='qtyspan' id='<?php echo $qid; ?>'> <?php echo $a[4] ?> </span><button class="btn btn-success"  id="btn" onclick="addQty(document.getElementById('<?php echo $qid; ?>').innerHTML , <?php echo $id; ?>)">+</button></td>
                                
                                <td id=<?php echo $priceid; ?> ><?php echo $a[2];?></td>
                                <td id=<?php echo $totalid; ?> ><?php echo $a[4]*$a[2];?></td>
                                <td class="cart-dropdown-removeIcon1" id=<?php echo $a[0];?>>
                                       <a href="#"> <span class="fa fa-trash fa-2x"></span></a>
                                   </td>
                                <?php $gtotal+=$a[4]*$a[2]; ?>
                                
                            </tr>

                            <?php } 
                            $gtotal +=200;
                            ?>



                            <tr>
                                <td colspan=3></td>
                                <td><b>Tax </b> <br> <b>Tax </b></td>
                                <td> 100  <br> 100 <br 100</td>
                            </tr>


                            


                                                    <tr>
                                <td colspan=3></td>
                                <td><font style="color:brown;font-weight:bolder;"><b>Total</td>
                                <b><td id="total"><?php echo $gtotal ?> </td></b>
                            </tr>
                             <tr>
                                <td></td>
                                        <td colspan=2 align=left class="no-td-border cart-dropdown-button">
                                            <span class="button"><span class="fa fa-eye"> Continue Shopping</span>
                                        </td>
                                        <td colspan=3 align=center class="no-td-border cart-dropdown-button">
                                            <span class="button"><span class="fa fa-share"> Checkout</span>
                                        </td>
                                    </tr>
                        </table> 
                    </div>
                
           



        <script>
        
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
    </script>
<script type=text/javascript>


$(document).ready(function(){  
$(document).on('click', '.cart-dropdown-removeIcon1', function() { 
              alert("removeClass");

              var id = $(this).attr('id');
              //alert(id);

              $.ajax({
              type: "post",
              url: "<?php echo url;?>/cart/deleteCartItem/"+id,
              // data: id,
              success: function(data){
                alert(data);
                  
                  $.ajax({                    
                      type: "post",
                      url: "<?php echo url;?>/cart",
                      success: function(data){
                        alert(data);
                        //document.getElementById('showCart').innerHTML = data;
                  }
                });
              }
              });

            });
         });
    </body>
    </html>

