<?php
//This code must be included at the top of your script before any output is sent to the browser
//-even before <!DOCTYPE> declaration
require_once realpath(dirname(__FILE__)."/resources/konnektiveSDK.php");
$pageType = "checkoutPage"; //choose from: catalogPage, checkoutPage, upsellPage1, upsellPage2, upsellPage3, upsellPage4, thankyouPage
$deviceType = "ALL"; //choose from: DESKTOP, MOBILE, ALL
$ksdk = new KonnektiveSDK($pageType,$deviceType);
$productId = $ksdk->page->productId;
$offer = $ksdk->getProduct((int) $productId);


?>
<!doctype html>

 

 <html language="en" >

	<head>
    <?php 
//this line of code must go either inside the <head> </head> tags or inside the <body></body> tags
$ksdk->echoJavascript();
?>

		<meta charset="UTF-8" />

		<title>AMES Eye Serum | CP</title>

		<link href="css/reset.css" type="text/css" rel="stylesheet" />

		<link href="css/style.css?v=1" type="text/css" rel="stylesheet" />

		<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'><!--font-family: 'Oswald', sans-serif;-->

                <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Merriweather:400,700' rel='stylesheet' type='text/css'><!--font-family: 'Merriweather', serif;-->

	</head>

	<body class="cp-bg">

            <div class="head" style="border-bottom: 1px solid gray;">

			<div class="logo-cp">

                           <!--  <a href="#">  -->	<img src="images/logo-2.png" alt="logo" width="230" height="auto" /> </a>

			</div>

                <div class="model-cp"> <img src="images/model.png" alt="model" width="200px" height="auto" /></div>

			<div class="timeline" >

				<p class="time-line"> SHIPPING INFO</p>

				<p class="time-line-1"> FINISH ORDER</p>

				<p class="time-line-wb"> SUMMARY</p>

			</div>

			

			<!-- <div class="cp-flag">

				<img src="images/USA-FLAG.jpg" alt="flag" title="USA-FLAG" />

				 <p>Internet Exclusive Offer</p>

				 <p>Available to US Residents Only</p>

			</div> -->

			

			<div class="flag-cp">

					<div class="flag-img">

						<img src="images/uk-flag.png" alt="flag" />

					</div>

			

					<div class="flag-text">

						<p>Internet Exclusive Offer</p>

						<p>Available to UK Residents only</p>

					</div>

					

			</div>

			<div class="clearfix">

			</div>

		</div>

            <div class="main" style="padding-top: 30px;">

			<div class="left-cp">

				<div class="top-color">

					<p class="normal"> <img src="images/eye-icon.png" />        13 others are viewing this offer right now -<span class="bold">  0:00 </span></p>

				</div>

				

				<p class="green-normal"> <span class="green"> Great Choice, Jane! </span>  Reduce the tired look of aging with this eye serum.<br/>

				Act now so you don’t miss out on this offer! </p>

				

				<p class="current" >

					Current Availability: <img src="images/progress-bar.png" alt="progress" /> <span class="bold">  LOW STOCK.</span> Sell-out Risk:<span class="red p-minus">   HIGH </span>

				</p>

				

				<p class="delivery">  Just pay a small shipping fee. Enjoy expedited delivery to <span class="blue bold"> Boulder, CO.</span></br>

				Your order is scheduled to arrive by  <span class="blue bold"> August 25, 2015</span>

				</p>

				

				<div class="bottom-cp">

					<div class="product-cp">

						<img width="86" height="269" src="images/product-img.png" alt="product" style="margin:30px 0 0 101px;"/>

					</div>

					<div class="product-info">

						

						 <p class="logo-text">

                                                     <span  class="bold"> AMES Eye Serum  </span></br>

						<!--Wrinkle Reducing Eye Serum-->

						</p>

						

						

						<p  class="price-des"> <span class="price">Price</span> <span class="bold  value green"> $0.00</span> </p>

						<p class="price-des-1" > <span class="shipping"><!--Shipping & Handling:-->Order Processing:</span> <span class="value">$4.95</span> </p>

                                                <p class="price-des-1" > <span class="shipping"><!--Shipping & Handling:-->Total:</span> <span class="value">$4.95</span> </p>

						<p class="price-des-2" > <span class="total">TOTAL</span>  <span class="value">$4.95</span></p>

                                                <p class="price-des-2" style="font-style: italic; font-size: 14px; float: right;" > £2.97 today, £4.74 when shipped </p>	

					</div>

					<p class="deliver" > 

						<img src="images/royal.png" alt="fed-ex" />

						<img src="images/ups.png" alt="fed-ex" />

						<img src="images/fed-ex.png" alt="fed-ex" />

					</p>

				</div>

				

				<div class="banner-cp">

					<img src="images/cp-banner.png?v=1" alt="banner" style="margin-left: -20px"; />

				

				

                                             <!--<p class="normal-fote">

				By placing an order, you will pay S & H to receive a 30 day supply. You will also be automatically enrolled in our membership program. The program will charge you &pound;______ on the 14th day of your order date for a monthly supply and every 30 days thereafter until you cancel. You can cancel at any time by calling xxx-xxx-xxxx. If you cancel before the 14th day of your order date, you pay the S&H of your 30 day supply. If you cancel after the 14th day of your order date, you shall pay for the 30 day supply plus any future supplies without refund.-->

                                <p class="normal-fote">

                                By placing an order with us, you agree to our full <a href="terms.html" target="_blank">Terms and Conditions</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of $4.95. We will then immediately ship you your first bottle of AMES Eye Serum. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of $84.95. Then on day 45 and every 30 days after, we will send you a fresh 30-day supply of Ames Eye Serum and you will be charged $84.95+$4.95 for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call 888-599-5086 or contact us via email at care@ameseyeserum.com to cancel your membership and owe nothing more.

                        </p>

			</div>

                        </div>

			<div class="right-cp">

                           <!--  <form action="thankyou.html" > -->

                             

				        

		<div class='ktemplate_boxRight'>
        
        
            <form id='kform' class='kform'>
                
                <p class="step" > <span class="bold" style="font-size: 32px; color: #fff !important;"> FINAL STEP </br>

					</span>Payment information</p>

					

                             <p style="padding: 10px;"> 

						<img src="images/master-card.png" alt="secure"  />

						<img src="images/visa.png" alt="secure"  />

					</p>
            
                <input type="hidden" name="productId" value="<?= $productId ?>">            
            
                           
            <div id='formfields'>
            
            <div class='kform_spacer kform_checkbox'>
                <input name='billShipSame' type='CHECKBOX' checked>
                <label for='billShipSame'>
                    Billing Address same as Shipping
                </label>
            </div>
            <div id='kform_hiddenAddress'>
               <div class='kform_spacer'>
                        <input name='shipAddress1' type='TEXT' isRequired>
                    </div>
                    
                    <div class='kform_spacer'>
                        <input name='shipAddress2' type='TEXT'>
                    </div>
                    
                    <div class='kform_spacer'>
                        <input name='shipCity' type='TEXT' isRequired>
                    </div>
                    
                    <div class='kform_spacer'>
                        <select name='shipState' isRequired>
                        </select>
                    </div>
                    
                    <div class='kform_spacer'>
                        <select name='shipCountry'></select>
                    </div>
                    
                     <div class='kform_spacer'>
                        <input name='shipPostalCode' maxlength="5" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" type='TEXT' isRequired>
                    </div>

			</div>

            

                <input type="hidden" name='paySource'  value="CREDITCARD">

                <div class='kform_spacer card'>

                        Credit Card:<br>

                        <div style='display:none'>

                            <div id='kformPaySourceWrap' inputType='radio'></div>

                            <div class='kform_spacer' id='kformNewPaymentType'>

                                <input type='checkbox' name='newPaymentType'>

                                <span>

                                    New Credit Card

                                </span>

                            </div>

                        </div>

                	</div>       



                	

                	

                   <div id='kform_paySourceCard'>   

                       <div class='kform_spacer'>

                            <input name='cardNumber' placeholder="Card Number" type='TEXT' maxlength="16" isRequired>

                        </div>

                        

                        <div class='kform_spacer'>

                            <input name='cardSecurityCode' placeholder="Security Code" type='TEXT' maxlength="4" isRequired>

                        </div>

                        

                        <div class='kform_spacer' style=' text-align: left; width: 306px;'>

                            <label for='cardMonth'  style='width: 25%; margin-top: 0px;'>

                               Expiration: 

                            </label>

                            <select name='cardMonth' style='margin: 0px; width: 35%;' isRequired>

                                <option value='01'>01 (Jan)</option>

                                <option value='02'>02 (Feb)</option>

                                <option value='03'>03 (Mar)</option>

                                <option value='04'>04 (Apr)</option>

                                <option value='05'>05 (May)</option>

                                <option value='06'>06 (Jun)</option>

                                <option value='07'>07 (Jul)</option>

                                <option value='08'>08 (Aug)</option>

                                <option value='09'>09 (Sep)</option>

                                <option value='10'>10 (Oct)</option>

                                <option value='11'>11 (Nov)</option>

                                <option value='12'>12 (Dec)</option>

                            </select>

                            <select name='cardYear' style='width: 35%; margin: 0px;' isRequired>

                                <!-- <option value='2015'>2015</option> -->

                                <option value='2016'>2016</option>

                                <option value='2017'>2017</option>

                                <option value='2018'>2018</option>

                                <option value='2019'>2019</option>

                                <option value='2020'>2020</option>

                                <option value='2021'>2021</option>

                                <option value='2022'>2022</option>

                                <option value='2023'>2023</option>

                                <option value='2024'>2024</option>

                                <option value='2025'>2025</option>

                                <option value='2026'>2026</option>

                                <option value='2027'>2027</option>

                            </select>

                        </div>

                    </div>

                </div>



				<div class="kform_spacer kform_checkbox">

                    <input name="confirm" id="terms_check" type="CHECKBOX" isRequired style="width: 20px; float: left; margin-bottom: 0px; margin-top: 5px; ">

                    <label for="confirm" style="width: 265px; margin-top: -1px; text-align: justify; font-size: 12px;">

                        By placing an order with us, you agree to our full <a target="_blank" href="terms.html">terms and conditions</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of $4.95. We will then immediately ship you your first bottle of AMES Eye Serum. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of $84.95. You will then be shipped a recurring supply of our product every 30 days and will be charged $84.95 + $4.95 for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call 888-599-5086 or contact us via email at care@ameseyeserum.com to cancel your membership and owe nothing more.

                    </label>

                </div><br>

  				

					<input type="submit" class="btn" id="kformSubmit" class="kform_submitBtn" value="Order Now">
                    <input type='hidden' name='orderItems' value=''>

					

					<p class="img-cp"> 

					<img src="images/bw-master.png" />

					<img src="images/bw-vis.png" />

					</p>

			 </form>

			</div>

			<div class="clearfix">

			</div>

		</div>

		<div class="footer">

			<ul class="link">

	

			<li> <a href="contact.html" target="_blank" > Contact Us |</a></li> 

	<li><a href="terms.html" target="_blank" >  Terms and Conditions |</a></li> 

	<li><a href="privacy.html" target="_blank" >Privacy Policy | </a></li> 

       <li><a href="ingredients.html" target="_blank" >Ingredients </a></li>

		</ul>

	 

                    <div class="copyright"> <strong>AMES Investments LLC </strong><br><br>

				Corp Address: 9675 Brentwood way #A, Westminster, CO 80021<br>

				Phone: 888-599-5086<br>

				Support Email: <a style=" color: #000;" href="mailto:care@ameseyeserum.com">care@ameseyeserum.com</a><br><br>

				 <p class="fote-note" > <?php echo date('Y');?> &COPY; AMES Eye Serum</p>

			</div>

		</div>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#terms_check').removeAttr('checked');
                        setTimeout(function () {
                            $('#terms_check').attr('checked', false);
                        }, 3000);
                    });
                </script>

	</body>

 </html>