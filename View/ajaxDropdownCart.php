<?php 

if(!$_SESSION['cart'])
{
  echo "
    <div class='col-lg-1 col-md-1 col-xs-1 col-sm-1'>
    </div>
    <div class='col-lg-10 col-md-10 col-xs-10 col-sm-10'>
      <h2>Cart is Empty !! <h2>
    </div>
    <div class='col-lg-1 col-md-1 col-xs-1 col-sm-1'>
    </div>";
}
else{
$gtotal=0;
foreach ($_SESSION['cart'] as $value) {
          
               $a = explode(",",$value);
               $gtotal +=$a[2];
echo "

<table class='table cart-dropdown-table'>
                               <tr>
                                   <td>
                                       <img src='".images."/cart/1.jpg' class='cart_dropdown_image'>
                                   </td>
                                   <td style='width:138px;'>
                                       <p>".$a[1]."</p>
                                       <div class='cart_dropdown_icon'><i class='fa fa-balance-scale'></i>  <p style='margin-left: 36px;'>1</p> </div>
                                      

                                   </td>
                                   <td class='cart-dropdown-removeIcon' id=".$a[0].">
                                       <a> <span class='fa fa-trash fa-2x'></span></a>
                                   </td>
                               </tr>";

                             }

                           echo "</table> 
                       
                            <table class='table cart-dropdown-table1'>
                                <tbody>
                                    <tr>
                                        <td class='text-left'>
                                            Sub-total
                                        </td>
                                        <td class='text-left'>
                                            Rs. ".$gtotal."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='text-left no-td-border'>
                                            Discount
                                        </td>
                                        <td class='text-left no-td-border'>
                                            Rs. 0
                                        </td>
                                    </tr>";
                                  
                                    // echo "<tr>
                                    //     <td class='text-left no-td-border'>
                                    //         Tax
                                    //     </td>
                                    //     <td class='text-left no-td-border'>
                                    //         Rs 100
                                    //     </td>
                                    // </tr>
                                    echo "<tr>
                                        <td class='text-left'>
                                            <b>TOTAL</b>
                                        </td>
                                        <td class='text-left'>
                                            <b>Rs. ".$gtotal."</b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class='no-td-border cart-dropdown-button'>
                                            <span class='button'><span class='fa fa-eye'> View Cart</span>
                                        </td>
                                        <td class='no-td-border cart-dropdown-button'>
                                            <span class='button'><span class='fa fa-share'> Checkout</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> ";
    }
?>