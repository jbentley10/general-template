<?php
        error_reporting(0);
?>
<html>

    <head>

        <meta charset="utf-8"/>



<title>Clear Health Test Booster</title>



<meta name="description" content="Clear Health Test Booster" />



<meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noydir,noodp" />



<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<meta http-equiv="content-language" content="en-us" />



<meta name="apple-mobile-web-app-capable" content="yes"/>

<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

<meta name="HandheldFriendly" content="true"/>

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>



<link rel="stylesheet" href="css/app.css?v=1.3" />

         <meta name="robots" content="noindex">

<meta property="og:title" content="" />

<meta name="description" content=""/>



<!-- for Facebook -->



<meta property="og:title" content="" />

<meta property="og:type" content="article" />

<meta property="og:image" content="" />

<meta property="og:url" content="" />

<meta property="og:description" content="" />



<!-- for Twitter -->



<meta name="twitter:card" content="summary" />

<meta name="twitter:title" content="" />

<meta name="twitter:description" content="" />

<meta name="twitter:image" content="" />



<meta name="viewport" content="width=device-width, initial-scale=1.0"/>



<meta name="viewport" content="width=1030"/>

<link rel="icon" href="/promotion/v5085/app/desktop/images/favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link rel='stylesheet' href='css/style.css?v=1.6' type='text/css' media='all' />



<!--[if lt IE 9]>



<script src="js/html5shiv.js"></script>



<![endif]-->

<style type="text/css">

.exitpopup-overlay {

	background: rgba(49, 49, 49, 0.8) none repeat scroll 0 0;

	opacity: 1;

}

.exitpop-content img {

	top: 0;

        margin: 0 auto !important;

}

#loading-indicator {

	background-color: rgba(0, 0, 0, 0.5);

	bottom: 0;

	box-sizing: border-box;

	height: 100%;

	left: 0;

	margin: 0 auto;

	position: fixed;

	right: 0;

	top: 0;

	width: 100%;

	padding: 0px !important;

	margin: 0px !important;

	font-size: 1px;

	z-index: 99990;

}

#loading-indicator:before {

	background: url("/promotion/v5085/app/desktop/images/loading.gif") no-repeat center center;

	box-sizing: border-box;

	content: "";

	height: 70px;

	left: 50%;

	margin-left: -35px;

	margin-top: -70px;

	position: absolute;

	top: 50%;

	width: 70px;

	z-index: 99996;

}

#loading-indicator:after {

	background: #fff;

	border-radius: 5px;

	box-sizing: border-box;

	color: #000;

	content: "Processing, one moment please... ";

	font-family: arial;

	font-size: 17px;

	height: 110px;

	left: 50%;

	line-height: 98px;

	margin-left: -150px;

	margin-top: -75px;

	padding-top: 35px;

	position: absolute;

	text-align: center;

	top: 50%;

	width: 300px;

	z-index: 99995;

}

</style>
<link href="Styles/Style.css?v=1" rel="stylesheet" />
<script type="text/javascript" src="https://l2.io/ip.js?var=myip"></script>
<script src="Scripts/jquery-1.7.2.min.js"></script>
<script src="Scripts/api.js?v=1.3"></script>
<script src="Scripts/scripts-util.js"></script>
<script type="text/javascript">

    $(document).ready(function ()
    {


    });

    function RushMyOrder()
    {
        AddSale(true, '.php');
    }
</script>

    </head>

    <body class="inner cp">

        <!--Kount pixel-->

<iframe width=1 height=1 frameborder=0 scrolling=no src="https://www.mycpoffers.com/pixel.html?t=htm&campaign_id=471&sessionId=1451394035"> <img width=1 height=1 src="https://www.mycpoffers.com/pixel.html?t=gif&campaign_id=471&sessionId=1451394035"/> </iframe>







                <div class="wrapper">

<div class="container">

  <div class="white">

    <div class="header clearfix"> <figure><img src="images/logo.png" alt="" width="270" height="129" class="logo">

        <img src="images/bottle.png" alt="" width="162" height="75" class="bottle_img"></figure>





    </div>

    <div class="content">

      <div class="columns clearfix">

        <div class="leftContent column column65">



          <div class="columns clearfix">

            <div class="bottle column column30 text-center"> <img src="images/prodcuct.png" alt="" width="229" height="200"> </div>

         <div class="details column column60">
                    <div class="packages">
                    <div class="package">
                        <div class="package-Info">
                            <div style="text-align: center;">
                                <p><b>
                                        <?php echo $_REQUEST['firstname'].' '. $_REQUEST['lastname'];?></b>
                                <p>
                                    <?php echo $_REQUEST['phone']; ?></p>
                                <p>
                                    <?php echo  $_REQUEST['email']; ?></p>
                            </div>
                            <br />
                            <div style="float: left; text-align: center; width: 45%;">
                                <p><b>Shipping Address:</b></p>
                                <p>
                                    <?php echo  $_REQUEST['address']; ?></p>
                                <p>
                                    <?php echo  $_REQUEST['city'].' '.$_REQUEST['state'].' '.$_REQUEST['zip']; ?></p></label></p>
                            </div>
                            <div style="float: right; text-align: center; width: 45%;">
                                <p><b>Billing Address:</b></p>
                                <p>
                                    <?php
                                        if($_REQUEST['billingaddress'] !='')
                                            echo  $_REQUEST['billingaddress'];
                                        else
                                            echo  $_REQUEST['address'];
                                    ?>
                                <p>
                                    <?php
                                        if($_REQUEST['billingcity'] !='' && $_REQUEST['billingstate'] !='' && $_REQUEST['billingzip'] !='')
                                            echo $_REQUEST['billingcity'].' '.$_REQUEST['billingstate'].' '.$_REQUEST['billingzip'];
                                        else
                                            echo  $_REQUEST['city'].' '.$_REQUEST['state'].' '.$_REQUEST['zip'];
                                    ?>
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

              <h2><strong class="caps">Clear Health Test Booster</strong> <br>

                <small><!--Natural Weight Loss Formula-->

				  <br>

                30 Day Supply - 60 Capsules </small></h2>



              <div class="table clearfix">

              <div class="columns1 clearfix">

                  <div class="label column column80"><strong class="larger">Sub-Total</strong></div>

                  <div class="amount column column20 text-right"><strong class="">$4.97</strong></div>

                </div>

                <div class="columns clearfix">

                  <div class="label column column80"><strong class="cp_order">Shipping Fee:</strong></div>

                  <div class="amount column column20 text-right"><strong class="cp_order op_price">$0.00</strong></div>

                </div>







                <div class="columns1 clearfix">

                  <div class="label column column80 cp_total">TOTAL</div>

                  <div class="amount column column20 text-right cp_total" id="order_total">$4.97</div>

                </div>



              </div>



            </div>

          </div>

          <div class="arrow">

          	<figure>

          		<img src="images/arrow.png" alt="" width="681" height="77"/>

            </figure>

            <p>

            Confirm Your Exclusive Product now!

            </p>



           </div>

          <p class="terms">

By placing your order today you'll be shipped a 30 day supply of Clear Health Test Booster (you just pay P&P). If you feel Clear Health Test Booster

not for you, cancel within 18 days from the day you order to avoid the purchase fee of $92.97 per item and enrolment in the auto-shipment

 program, which sends you a fresh supply of Clear Health Test Booster every 30 days, starting 30 days after your trial period starts, at the low price of

$92.97 per item. By ordering you agree that you will be billed $92.97 if you do not cancel within the trial period. You can cancel anytime by

e-mailing to care@clearhealthtestoboost.com. This charge will appear on your credit card statement as "ClearHealthTestoBoost8552947556". <br></p>

        </div>
             </div>

        <div class="rightContent column column35">

          <div class="cp-form">

            <div class="formtop"><strong>FINAL STEP</strong>PAYMENT INFORMATION<!--<span><img src="images/form_aro.png"></span>--></div>
              <form name="checkout" onsubmit="RushMyOrder(); return false;" method="post">

              <div class="fields cp_fixed">

                <div class="methods text-center">

                  <p><img src="images/cards.png?v=1" alt="" width="119" height="34" /></p>

                </div>

                <!--<div class="isSame field  text-center">

                  <p class="question"> Is your billing address<br> the same as your shipping address?</p>

                  <p>

                    <input type="radio" name="billingSameAsShipping" value="yes" checked="checked" />

                    <label for="sameYes">Yes</label>

                    <input type="radio" name="billingSameAsShipping" value="no" />

                    <label for="sameNo">No</label>

                  </p>

                </div>

                <div class="billing billing-info" style="display:none;">

                  <div class="clearfix field">

                    <label class="label">First Name:</label>

                    <div class="input">

                      <input type="text" name="billingFirstName" placeholder="Billing First Name" value="" data-error-message="Please enter your billing first name!">

                    </div>

                  </div>

                  <div class="clearfix field">

                    <label class="label">Last Name:</label>

                    <div class="input">

                      <input type="text" name="billingLastName" placeholder="Billing Last Name" value="" data-error-message="Please enter your billing last name!">

                    </div>

                  </div>

                  <div class="clearfix field">

                    <label class="label">Address:</label>

                    <div class="input">

                      <input type="text" name="billingAddress1" placeholder="Billing Address" value="" data-error-message="Please enter your billing address!">

                    </div>

                  </div>

                  <div class="clearfix field">

                    <label class="label">City:</label>

                    <div class="input">

                      <input type="text" name="billingCity" placeholder="Billing City" value="" data-error-message="Please enter your billing city!">

                    </div>

                  </div>

                  <div class="clearfix field">

                    <label class="label">Zip Code:</label>

                    <div class="input">

                      <input type="text" name="billingZip" placeholder="Billing Zip Code" value="" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" maxlength="5" data-min-length="5" data-error-message="Please enter a valid billing zip code!">

                    </div>

                  </div>

                  <div class="clearfix field">

                    <label class="label">Country:</label>

                    <div class="input">

                      <select size="1" name="billingCountry" data-selected="" data-error-message="Please select your billing country!">

                        <option value="">Select Country</option>

                      </select>

                    </div>

                  </div>

                  <div class="clearfix field">

                    <label class="label">State:</label>

                    <div class="input">

                      <input type="text" name="billingState" placeholder="Billing State" data-selected="" data-error-message="Please enter your billing state!" />

                    </div>

                  </div>

                </div>-->

                <div class="clearfix field">

                  <label class="label">Card Type:</label>

                  <div class="input">
                  <select name="ddlPaymentMethod" class="required" required style="width: 173px;">
                      <option value="">Select</option>
                      <option value="1">Visa</option>
                      <option value="2">Master Card</option>
                      <option value="3">American Express</option>
                      <option value="4">Discover</option>
                  </select>

                  </div>

                </div>

                <div class="clearfix field">

                  <label class="label">Credit Card:</label>

                  <div class="input">
                  <input type="text" name="txtCreditCard" width="200" maxlength="16" class="required masked masked-lined-dashed" required />
                  </div>

                </div>

                <div class="clearfix field">

                  <label class="label">Exp Date:</label>

                  <div class="input clearfix">

                    <div class="columns">

                      <div class="column column50">
                            <select name="ddlExpiryMonth" class="required" required style="width: 84px;">
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                      </div>

                      <div class="column column50">
                            <select name="ddlExpiryYear" class="required" required style="width: 84px;">
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="clearfix field">

                  <label class="label">CVV:</label>

                  <div class="input clearfix">

                    <div class="columns">

                      <div class="column column50">
                      <input type="text" name="txtCVV" class="required" width="200" maxlength="4" required />
                      </div>

                        <div class="column column50"> <a href="images/CVV21.png" target="_blank"  class="cvvTip">Whats This?</a> </div>

                    </div>

                  </div>

                </div>

              <div class="kform_spacer kform_checkbox">
                    <label for="confirmTOS">
                        <!--I agree to the <a href="terms.html" target="_blank">terms and conditions</a>-->
						<span class="agree"><input type="checkbox" name="chkAcceptTermsOfService" style="width: 20px; float: left; margin-bottom:0; margin-top: 5px;" required />By placing an order with us, you agree to our full <a target="_blank" href="terms.html">terms and conditions</a> and <a target="_blank" href="privacy.html">privacy policy</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of $4.97. We will then immediately ship you your first bottle of Clear Health Test Booster. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of $92.97. Starting 30 days after the trial period ends, you will be shipped a recurring supply of our product every 30 days and will be charged $92.97 + $4.97 for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call <a href="tel:877-927-4720">877-927-4720</a> or contact us via email at <a href="mailto:care@clearhealthtestoboost.com">care@clearhealthtestoboost.com</a> to cancel your membership and owe nothing more. This charge will appear on your credit card statement as "ClearHealthTestoBoost8552947556".</span>

                    </label>

                <div class="clearfix field">
                <input type="submit" id="btnRushMyOrder" value="Complete Checkout" class="btn-rushMyOrder submitbtn" />
                </div>

                <p id="loading-indicator" style="display:none;">Processing...</p>

                <p id="crm-response-container" style="display:none;">Limelight messages will appear here...</p>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>
      </div>

  <div class="footer text-center">

      <div style="padding-top:40px; text-align:center; font:12px/20px times new roman; color:#fff;  ">



Clear Health, LLC<br>



	Corp Address: 5042 Wilshire Blvd #38411 Los Angeles, CA 90036<br><br>



	 Phone: 877-927-4720<br>



	</div>

    <ul>

      <li><a href="terms.html" target="_blank">TERMS</a></li>

          <li><a href="privacy.html" target="_blank">PRIVACY POLICY</a></li>

        <li><a href="contact.html" target="_blank">CONTACT US</a></li>

         <li><a target="_blank" href="ingredient.html">INGREDIENTS</a></li>

    </ul>

    <p> <?php echo date('Y'); ?> &COPY; Clear Health Test Booster</p>

	<div style="width:800px; text-align:center; margin:0 auto;">This product is not for use by or sale to persons under the age of 18. This product should be used only as directed on the label. All trademarks and copyrights are the property of their respective owners and are not affiliated with nor do they endorse Clear Health Test Boost. These statements have not been evaluated by the FDA. This product is not intended to diagnose, treat, cure or prevent any disease. Individual results will vary. By using this site you agree to follow the Privacy Policy and all Terms & Conditions printed on this site. Void Where Prohibited By Law. </div>

  </div>







                             </body>

</html>
