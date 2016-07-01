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
    }

    #btn{
        background-color: rgb(180, 163, 118);
        border-radius: 0px;
        height: 40px;
        width: 40px;
    }
    #list{
        
        max-width: 930px;
        width: 70%;
        margin-left: 200px;
        margin-top:50px;
        vertical-align: middle;
    }

    .top{
        background-color:rgb(180, 163, 118);
    }


     </style>   
     <script type="text/javascript">
     function addQty(qty,pid){
        if(qty<8){
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
        

        document.getElementById('quant'+pid).innerHTML = qty;
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
        document.getElementById('quant'+pid).innerHTML = qty;
        document.getElementById('t'+pid).innerHTML = price;
         document.getElementById("total").innerHTML = grand_total;
       
     }

     </script>
    </head>
        <body>

            <table class=table id='list'>

                <tr class=top>
                    <th> Product Image</th>
                    <th> Product name </th>
                    <th> Product quantity </th>
                    <th> Product price </th>
                    <th>total</th>
                </tr>

                <?php 

                $gtotal = 0;
                foreach ($_SESSION['cart'] as $value) {
              
                   $a = explode(",",$value);
                   echo $a[0]."<br>".$a[1]."<br>".$a[2]."<br>".$a[3]."<br><br><Br>";
                   
                    $id = $a[0];//$row['cart_id'];
                    $qid="quant".$a[4];//$row['cart_id'];
                    $priceid="p".$a[2];//$row['cart_id'];
                    $totalid="t".$a[0];//$row['cart_id'];
                    
                    ?>

        <tr>
                    
                    <input type='hidden' name='pid' id='pid' value=<?php echo $a[0]; ?>>
                    <td><img src='<?php echo images?>/1.jpg' height=150px width=100px;></td>
                    <td><a class="link"> <?php echo $a[1] ?></a></td>
                    <td ><button  class="btn btn-success" id="btn" onclick="subQty(document.getElementById('<?php echo $qid; ?>').innerHTML , <?php echo $id; ?>)">-</button>  <span class='qtyspan' id='<?php echo $qid; ?>'> <?php echo $a[4] ?> </span><button class="btn btn-success"  id="btn" onclick="addQty(document.getElementById('<?php echo $qid; ?>').innerHTML , <?php echo $id; ?>)">+</button></td>
                    
                    <td id=<?php echo $priceid; ?> ><?php echo $a[2];?></td>
                    <td id=<?php echo $totalid; ?> ><?php echo $a[4]*$a[2];?></td>
                    <?php $gtotal+=$a[4]*$a[2]; ?>
                </tr>

                <?php } 
                $gtotal +=200;?>



                <tr>
                    <td colspan=3></td>
                    <td><b>Tax </b> <br> <b>Tax </b></td>
                    <td> 100  <br> 100 <br 100</td>
                </tr>


                


                                        <tr>
                    <td colspan=3></td>
                    <td><font style="color:brown;font-weight:bolder;"><b>Total</td>
                    <td id="total"><b><?php echo $gtotal ?> </b></td>
                </tr>
                 
            </table> 

    </body>
    </html>

