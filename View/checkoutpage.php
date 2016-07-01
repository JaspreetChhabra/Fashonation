<link rel="stylesheet" href="<?php echo css ?>/awesome-bootstrap-checkbox.css">
<style type="text/css">
    .left-sidebar h2, .checkout_div1 h2 {
        color: #000;
        font-size: 18px;
        text-transform: uppercase;
        position: relative;
        padding:10px;
        z-index: 3;
    }


    .ckout
    {
        margin-top: 50px;
        border:2px solid #cfcfcf;
        padding: 10px;
    }

    .btn-golden.active.focus, .btn-golden.active:focus, .btn-golden.active:hover, .btn-golden:active.focus, .btn-golden:active:focus, .btn-golden:active:hover, .open>.dropdown-toggle.btn-golden.focus, .open>.dropdown-toggle.btn-golden:focus, .open>.dropdown-toggle.btn-golden:hover
     {
    color: #fff;
    background-color:  rgb(180, 163, 118);
    border-color:  rgb(180, 163, 118);
	}

    .btn-golden
    {
    	border-radius: 0px;
    	background-color: #fff;
    	color: rgb(180, 163, 118);
    	font-weight: bold;
    	border:3px solid rgb(180, 163, 118);
    }
    .btn-golden:hover,.btn-golden:focus,.btn-golden:active
    {
    	background-color: rgb(180, 163, 118);
    	color: #fff;
    	border:3px solid rgb(180, 163, 118);
    	transition: all 0.3s all ease-in-out;

    }

    .checkout_div1
    {

    }

    hr{
        margin-top: 10px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #cfcfcf;
    }

    .form-control
    {
        border-radius: 0px;
        background-color: #F0F0E9;
        margin-bottom: 10px;
    }

  
    input[type=checkbox]
    {
        background-color: transparent;
    }


</style>
<div class="container">

    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 ckout">
        <div class="left-sidebar">
        <form>
            <div class="checkout_div1"><!--checkout_div-->
                <h2>Step 1: Enter Billing and Shipping Informtion </h2>

                <div class="col-sm-12 col-lg-12 col-xs-12 col-sm-12">
                    <div class="">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12"><p>Billing Address: </p><hr/></div>
                        <div class="">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                                        <input name="billaddline1" id="billaddline1" value="" class="form-control" type="text" placeholder="Address 1 *" required />
                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                        <input class="form-control" id="billaddline2" name="billaddline2" type="text" placeholder="Address 2" title="Address Line 2" pattern="[A-Za-z]+" required />	
                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                        <input class="form-control" id="billzip" name="billzip" type="tel" min="000000" requiredmaxlength="6" title="Zip/Postal Code" placeholder="Zip / Postal Code *" />

                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                        <input type="text" class="form-control" id="billcountry" name="billcountry" disabled value="India" />
                                        
                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                        <select required class="form-control" id="billcity" name="billcity">
                                            <option>-- State --</option>
                                            <option>Gujarat</option>
                                            <option>Punjab</option>
                                            <option>Rajasthan</option>
                                            <option>Telangana</option>
                                            <option>Delhi</option>
                                        </select>	
                                    </div>


                                </div>
                                <div class="alertbx col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                    <br/><div class="checkbox">
                                        <input id="checkbox3" onclick="callme()" type="checkbox">
                                        <label for="checkbox3">
                                            Shipping Address same as Billing Address?
                                        </label>
                                    </div><br/>
                                </div>
                                <div id="shipaddr">
                                    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12"><p >Shipping Address: </p><hr/></div>
                                    <div class="">
                                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                                                <input id="shipaddline1" name="shipaddline1" class="form-control" type="text" placeholder="Address 1 *">
                                            </div>

                                            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                                <input class="form-control" id="shipaddline2" name="shipaddline2" type="text" placeholder="Address 2" title="Address Line 2" pattern="[A-Za-z]+" >	
                                            </div>

                                            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                                <input class="form-control" id="shipzip" name="shipzip" type="tel" min="000000" maxlength="6" title="Zip/Postal Code" placeholder="Zip / Postal Code *">

                                            </div>

                                            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                                <input class="form-control" type="text" id="shipcountry" name="shipcountry" disabled value="India" />
                                                
                                            </div>

                                            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">

                                                <select class="form-control" id="shipcity" name="shipcity">
                                                    <option>-- State --</option>
                                                    <option>Gujarat</option>
                                                    <option>Punjab</option>
                                                    <option>Rajasthan</option>
                                                    <option>Telangana</option>
                                                    <option>Delhi</option>
                                                </select>	
                                            </div>


                                        </div>

                                    </div>	
                                </div>
                                <div>
                                    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                    	<div class="col-md-12 col-lg-3 col-lg-offset-4 col-xs-12 col-sm-12">
				                        <input type="button" class="btn btn-golden" onclick="checkValues()" value="Next" />
				                        </div>
					                    <div class="col-md-12 col-lg-3 col-lg-offset-0 col-xs-12 col-sm-12">
					                        <button class="btn btn-golden">Cancel</button>
					                    </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>



                <br/><br/>


            </div>
            <div class="checkout_div2">
            	<label class="control label"> <h2>Step 2: Select payment method </h2>	</label>
            	<br/><br/>
            	<div class="text-center col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <div class="col-md-12 col-lg-5 col-lg-offset-1 col-xs-12 col-sm-12">
                        <button class="btn btn-golden">Cash On Delivery</button>
                        <label class="control-label">COD only available in Gandhinagar and Ahemdabad</label>
                    </div>
                    <div class="col-md-12 col-lg-5 col-lg-offset-1 col-xs-12 col-sm-12">
                        <button class="btn btn-golden">Pay using PayUMoney</button>
                    </div>
                </div>
            </div>
            <!-- <div class="checkout_div1">
            <br/>
                <h2>Step 2: Select payment method </h2>
                <br/><br/>
                <div class="text-center col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <div class="col-md-12 col-lg-5 col-lg-offset-1 col-xs-12 col-sm-12">
                        <button class="btn btn-golden">Cash On Delivery</button>
                        <label class="control-label">COD only available in Gandhinagar and Ahemdabad</label>
                    </div>
                    <div class="col-md-12 col-lg-5 col-lg-offset-1 col-xs-12 col-sm-12">
                        <button class="btn btn-golden">Pay using PayUMoney</button>
                    </div>
                </div>
             </div>-->
            <!--checkout_div-->
            
            </form>
        </div>
    
</div><!-- < container> -->

    <!-- jQuery -->
    <script src="<?php echo js ?>/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo js ?>/bootstrap.min.js"></script>
    <script type="text/javascript">


    	    	 $(".checkout_div2").hide();

        function callme()
        {
        	 $("#shipaddr").toggle(500);
        }

   

        function checkValues()
        {
        	alert(document.getElementById("billaddline1").value.length);
        		msg = "";
        				if( document.getElementById("billaddline1").value.length <= 0 )
                        {
                            msg += "Enter AddressLine 1 \n"; 
                        }
                        if( document.getElementById("billaddline2").value.length <= 0 )
                        {
                            msg += "Enter AddressLine 2 \n"; 
                        }
                        if( document.getElementById("billcity").value.length <= 0 )
                        {
                            msg += "Enter Billing City \n"; 
                        }
                        if( document.getElementById("billzip").value.length <= 0 )
                        {
                            msg += "Enter Billing Zip Code \n"; 
                        }

                        if(msg != "")
                        {
                        	alert(msg);
                        }
                        else
                        {
                            $(".checkout_div1").hide(100);
	        	 			$(".checkout_div2").show();
                        }
        		 
	    }

//	    function 

    </script>
    <script type="text/javascript">




