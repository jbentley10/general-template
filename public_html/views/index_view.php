<!--
 To Use this page with Konnektive Uncomment lines 205 and 311. Then comment out lines 206 and 310.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>{{ productName }}</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!------- template 2 ---------->
 <style>
	 /* site body background class */
	 .compliment {
	 background-color:#{{color0}} !important;
	 }
	 /* site form background class */

	 div#formWrap {
	 background:#{{color1}};
	 }
	 .btn {
	 background:#{{color2}};
	 }
	 .btn:hover {
	 background-color:#{{color3}} !important;
	 }
	 .form-group {
	 margin-bottom: 5px !important;
	 width: 64%;
	 float: right
	 }
	 .row {
	 background: -webkit-linear-gradient(top, #{{color4}} , #{{color5}}) !important;
	 background: linear-gradient(to bottom, #{{color4}} , #{{color5}}) !important;
	 }
	 .arrow_box:before {
	 border-left-color:#{{color3}} !important;
     }
     .arrow_box:after {
	 border-left-color:#{{color3}} !important;
     }
     .arrow_box {
	 background: #{{color3}} !important;
     }
     .tail_box:before {
	 border-right-color:#{{color3}} !important;
	 border-bottom-color: #{{color3}} !important;
     }
     .tail_box:after {
	 border-right-color:#{{color3}} !important;
	 border-top-color: #{{color3}}  !important;
     }
     .tail_box {
	 background: #{{color3}} !important;
     }
	 .arrow {
	 position: relative;
	 margin: 10px -45px 0 -11px;
     }
	 p#box {
	 background: #fff;
	 font-size: 17px;
	 padding: 10px;
	 border-radius: 10px;
	 box-shadow: 2px 2px 6px #C2C2C5;
	 border-left: 4px #{{ color6 }} solid;
	 }

</style>
    <!-- SMOOTH SCROLL PLACE IN HEAD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <!-- End of SMOOTH SCROLL -->
    {% include "fonts.html" %}
</head>

<body class="compliment">
    <div name="top"></div>
    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container ">
        <!-- Heading Row -->
        <!-- <div class="row logo"><div class="col-xs-12"></div></div> -->
        <div class="row">
          <div class="col-md-8">

              <div class="col-md-6">
                  <img src="img/model.png" class="imgMain" width="auto" height="700" style="margin: 65px 0 -20px -5px;" />
              </div>

              <div class="col-md-6">

                  <div id="logoTextTop" style="text-align: center;">
                        <span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span><br>
                        <span id="{{fontNumber}}-B" >{{brandedName2}}</span>
                    </div>


                  {% include 'bullets.html' %}

                    <div class="mdBtlWrap center-block">
                        <div class="mdBtlLogo ">
                            <!-- <img src="img/logo.png" class="img-responsive center-block" /> -->
                            <span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span><br>
                            <span id="{{fontNumber}}-B">{{brandedName2}}</span>
                        </div>
                    </div><!--/mdBtl01Wrap-->

              </div>
              <!-- /.col-md-6 -->
              <div style="clear:both;"></div>
<!--
              <div id="header_banner_arrow">
                  <p><strong>Claim your Product Today!</strong>
                      100% Natural Forskolin Extract
                  </p>
              </div>
-->
              <div class="arrowDiv">
               <div class="top-arrow arrow_box arrow">
                  <p class="arrow-text">Confirm Your Exclusive Product!</p>
              </div>
               <div class="top-arrow tail_box arrow">
                  <p class="arrow-text"></p>
              </div>
              </div>
          </div>
          <!-- /.col-md-8 -->
            <div class="col-md-4" id="formWrap">
<!-- Konnective -->    <form id="kform">
                /*<form id="index-form"  name="index-form" method="post" action="checkout.php">*/
                    <div class="topform-callout">
                        <p class="topform-callout-text">TELL US WHERE TO SEND <strong>YOUR PRODUCT</strong></p>
                    </div>
                    <label class="label">First Name:</label>
                    <div class="form-group">

                        <input type="text" class="form-control" name="firstName" placeholder="First name" isRequired oninvalid="this.setCustomValidity('Please enter your first name')" onchange="this.setCustomValidity('')">
                    </div>
                    <label class="label">Last Name:</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastName" placeholder="Last name" isRequired oninvalid="this.setCustomValidity('Please enter your last name')" onchange="this.setCustomValidity('')">
                    </div>
                    <label class="label">Address:</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="shipAddress1" placeholder="Address" isRequired oninvalid="this.setCustomValidity('Please enter your address')" onchange="this.setCustomValidity('')">
                    </div>
                    <label class="label">City:</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="shipCity" placeholder="City" isRequired>
                    </div>
                    <label class="label">State:</label>
                    <div class="form-group">
                        <select isRequired class="form-control" name="shipState" oninvalid="this.setCustomValidity('Please select your State')" onchange="this.setCustomValidity('')">
                            <option value="">Select State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <label class="label">Country:</label>
                    <div class="form-group">
                        <select class="form-control" name="shipCountry" oninvalid="this.setCustomValidity('Sorry The product is not availiable in your country')" onchange="this.setCustomValidity('')">
                            <option value="">Select Country</option>
                            <option value="US">United States</option>

                        </select>
                    </div>
                    <label class="label">Zip Code:</label>
                    <div class="form-group">
                        <input type="number" id="zip" name="shipPostalCode" placeholder="Zip Code" class="form-control" maxlength="5" minlength="5" isRequired oninvalid="this.setCustomValidity('Please enter your ZIP code')" pattern="\d*" onchange="this.setCustomValidity('')">
                    </div>
                    <label class="label">Phone Number:</label>
                    <div class="form-group ">
                        <input type="tel" name="phoneNumber" placeholder="Phone" class="form-control" maxlength="10" minlength="10" isRequired oninvalid="this.setCustomValidity('Please Enter a Valid Phone Number')" pattern="\d*" onchange="this.setCustomValidity('')">
                    </div>
                    <label class="label">Email Address:</label>
                    <div class="form-group ">
                        <input type="email" class="form-control" name="emailAddress" placeholder="Email Address" isRequired>
                    </div>

                    <div class="checkbox">

                        <input type="checkbox" type="checkbox" name="confirm" isRequired oninvalid="this.setCustomValidity('Please Agree to our terms and conditions')" onchange="this.setCustomValidity('')">By placing an order with us, you agree to our full  <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('terms.php', 'modal');">Terms and Conditions</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of ${{ trialPrice }} . We will then immediately ship you your first bottle of {{ productName }}. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of ${{ rebillPrice }}  starting 45 days after you trial has been expired you will be shipped a recurring supply of {{ productName }} every 30 days and will be charged ${{ rebillPrice }} + ${{ trialPrice }}  for the total amount of ${{ total }}  for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call {{ phone }}  or contact us via email {{ email }} to cancel your membership and owe nothing more.
                    </div>
                    <div class="btn-container">
                        <!-- <button type="submit" id="submit-btn" class="btn">ORDER NOW</button> -->
<!-- Konnective -->     <button type="submit" id="kformSubmit" class="btn">ORDER NOW</button>
                    </div>
                </form>

            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->


        <hr class="style-three">

        <div class="row hidden-xs">

            <div class="hidden-sm-down col-md-8">
                <div class="hidden-sm-down col-md-6">

                    <img src="img/model2.png" class="img-responsive center-block" width="auto" height="400" style="margin: 0px auto -20px;" />

                </div>
                <!-- /.col-md-4 -->

                <div class="col-md-6" >
                    <div id="logoText" style="text-align: center;">
                        <span id="font9-A" class="font-effect-shadow-multiple">{{brandedName1}}</span><br>
                        <span id="font9-B" >{{brandedName2}}</span>
                    </div>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

    				{% include 'bullets.html' %}

                </div>
                <!-- /.col-md-4 -->

                <div style="clear:both;"></div>
				<div class="arrowDiv">
					<div class="top-arrow arrow_box arrow">
						<p class="arrow-text">Confirm Your Exclusive Product!</p>
					</div>
					<div class="top-arrow tail_box arrow">
						<p class="arrow-text"></p>
					</div>
                </div>

            </div>
            <!-- /.col-md-8 -->

            <div class="hidden-sm-down col-md-4">


                <div class="lgBtlWrap center-block" style="margin-top: 20px;">
                    <div class="lgBtlLogo ">
                        <!-- <img src="img/logo.png" class="img-responsive center-block" /> -->
                        <span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span><br />
                        <span id="{{fontNumber}}-B">{{brandedName2}}</span>
                    </div>
                </div><!--/lgBtlWrap-->
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <a href="#top" class="btn">Order Now!</a>
            </div>
            <!---/col-md-4-->
        </div>
        <!-- /.row -->

        <hr class="style-three">

        <div class="row">

            <div class="col-md-4">
                <div class="lgBtlWrap center-block hidden-xs">
                    <div class="lgBtlLogo ">
                        <!-- <img src="img/logo.png" class="img-responsive center-block" /> -->
                        <span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span><br />
                        <span id="{{fontNumber}}-B">{{brandedName2}}</span>
                    </div>
                </div><!--/lgBtlWrap-->
                <a href="#top" class="btn">Order Now!</a>
            </div>
            <!---/col-md-4-->

            <div class="col-md-8">

                <div id="contentWrap">{% include 'content.html' %}</div>

            </div>
            <!-- /.col-md-8 -->

        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->



    <div class="container">

        <!-- Footer -->
        <footer class="footer-basic-centered">

            <p class="footer-company-motto">
                {{ corpName }}
                <br /> {{ corpAddress }}
                <br /> {{ phone }}
                <br /> {{ email }}
            </p>

            <p class="footer-links">
                <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('terms.php', 'modal');">Terms and Conditions</a> &bull;
                <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('privacy.php', 'modal');">Privacy Policy</a> &bull;
                <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('contact.php', 'modal');">Contact Us</a> &bull;
                <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('ingredients.php', 'modal');">Ingredients</a>
            </p>

            <p class="footer-company-name">{{ productName }} &copy; 2016</p>
            <br />
            <p class="footer-company-name">This product is not for use by or sale to persons under the age of 18. This product should be used only as directed on the label. It should not be used if you are pregnant or nursing. Consult with a physician before use if you have a serious medical condition or use prescription medications. A Doctor's advice should be sought before using this and any supplemental dietary product. All trademarks and copyrights are the property of their respective owners and are not affiliated with nor do they endorse {{ productName }}. These statements have not been evaluated by the FDA. This product is not intended to diagnose, treat, cure or prevent any disease. Individual weight loss results will vary. By using this site you agree to follow the Privacy Policy and all Terms & Conditions printed on this site. Void Where Prohibited By Law.</p>

        </footer>

    </div>
    <!--/container-->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        var theZip = document.getElementById("zip");
        theZip.oninput = function () {
            if (this.value.length > 5) {
                this.value = this.value.slice(0, 5);
            }
        }
    </script>



	<!----------------- terms pop modal ------------------------>
	<link href="css/app.css" rel="stylesheet" type="text/css" />
	<script src="js/popup.js" type="text/javascript"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
	<script type="text/javascript" src="js/main.js"></script>
	<script src="js/standard.js"></script>
	<link rel="stylesheet" href="css/popup.css" type="text/css" media="screen">
	<div class="bg_overlay">
	</div>
	<div class="overlay_info" id="dv_info">
		<div class="closediv">
		<a title="Close" href="javascript: close('dv_info');">close</a></div>
		<div class="divbody">
			<div id="popupcopy">
			</div>
		</div>
	</div>
	<!----------------- terms pop modal ------------------------>


</body>

</html>
