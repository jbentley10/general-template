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
    <link href="https://fonts.googleapis.com/css?family=Contrail+One|Black+Ops+One|Squada+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="compliment">
    <div name="top"></div>
    <!-- Navigation -->

    <!-- header part -->
    <header class="index-header ">
        <section class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- <h1 class="animated fadeInDown">Muscle Enhance may help you maximize results and
                    achieve fitness goals!</h1> -->
                    <img class="animated fadeInDown" alt="Muscle Enhance Logo" src="../img/logo.png" />
                    <ul>
                        <li class="animated fadeInLeft">
                            {{ sectionOneBulletOne }}
                        </li>
                        <li class="animated fadeInLeft">
                            {{ sectionOneBulletTwo }}
                        </li>
                        <li class="animated fadeInLeft">
                            {{ sectionOneBulletThree }}
                        </li>
                    </ul>
                    <img class="animated fadeInLeft" alt="Muscle Enhance bottle" src="../img/bottle.png" />
                </div>

                <div class="form_bg col-xl-10 col-sm-12 col-md-5 col-xl-offset-1 animated fadeIn">
                    <h3>Claim your trial today!</h3>
                    <form id="index-form" name="index-form" method="post" action="checkout.php">
                        <div  class="half_field">
                            <input type="text" class="form-control" name="fName" placeholder="First name" id="first-name-input" required oninvalid="this.setCustomValidity('Please enter your first name')" onchange="this.setCustomValidity('')">
                            <input type="text" class="form-control" name="lName" placeholder="Last name" required oninvalid="this.setCustomValidity('Please enter your last name')" onchange="this.setCustomValidity('')">
                            <input type="text" class="form-control" name="address" placeholder="Address" required oninvalid="this.setCustomValidity('Please enter your address')" onchange="this.setCustomValidity('')">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                            <select required class="form-control" name="state" oninvalid="this.setCustomValidity('Please select your State')" onchange="this.setCustomValidity('')">
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
                            <select class="form-control" required name="country" oninvalid="this.setCustomValidity('Sorry The product is not availiable in your country')" onchange="this.setCustomValidity('')">
                                <option value="">Select Country</option>
                                <option value="US">United States</option>
                            </select>
                            <input type="text" id="zip" name="zip" placeholder="Zip Code" class="form-control" maxlength="5" minlength="5" required oninvalid="this.setCustomValidity('Please enter your ZIP code')" pattern="\d*" onchange="this.setCustomValidity('')">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                            <input type="text" name="phone" placeholder="Phone" class="form-control" maxlength="10" minlength="10" required oninvalid="this.setCustomValidity('Please Enter a Valid Phone Number')" pattern="\d*" onchange="this.setCustomValidity('')">
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" type="checkbox" name="confirm" required oninvalid="this.setCustomValidity('Please Agree to our terms and conditions')" onchange="this.setCustomValidity('')">By placing an order with us, you agree to our full  <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('terms.php', 'modal');">Terms and Conditions</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of ${{ trialPrice }} . We will then immediately ship you your first bottle of {{ productName }}. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of ${{ rebillPrice }}  starting 45 days after you trial has been expired you will be shipped a recurring supply of {{ productName }} every 30 days and will be charged ${{ rebillPrice }} + ${{ trialPrice }}  for the total amount of ${{ total }}  for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call {{ phone }}  or contact us via email {{ email }} to cancel your membership and owe nothing more.
                        </div>
                        <div class="btn-container">
                            <button class="btn" id='kformSubmit' type="submit">Order Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </header>


    <!--START first SECTION-->

    <section class="first_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li class="animated fadeInUp">
                            <i class="fa fa-flask" aria-hidden="true"></i>
                            <p>
                                {{ sectionTwoBulletOne }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li class="animated fadeInUp">
                          <i class="fa fa-smile-o" aria-hidden="true"></i>
                            <p>
                                {{ sectionTwoBulletTwo }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li class="animated fadeInUp">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <p>
                                {{ sectionTwoBulletThree }}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--END first SECTION-->

    <!--START second section-->

    <section class="second_section clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img alt="Muscle model" src="../img/model.png" />
            <div class="btn-container">
                <button class="btn" id='kformSubmit' type="submit">Order Now</button>
            </div>
          </div>
          <div class="col-md-6">
            <img class="animated fadeInDown" alt="Muscle Enhance Logo" src="../img/logo.png" />
            <strong>Find out what {{ productName }} can do for you today!</strong>
            <img alt="Muscle Enhance bottle" src="../img/bottle.png" />
          </div>
        </div>
      </div>
    </section>
    <!--END second section-->

    <!--START third section-->

    <section class="third_section clearfix hidden-sm">

    </section>

    <!--END third section-->

    <!--START fourth section-->

    <section class="fourth_section clearfix">
    </section>

    <!--END fourth section-->

    <!--START FOOTER SECTION-->

    <section class="footer_section clearfix">
    </section>

    <!--middle part-->

    <!--end header part-->

    <!--start FOOTER-->
    <div class="container">

        <!-- Footer -->
        <footer class="footer-basic-centered">

            <p class="footer-company-motto">
                {{ corpName }}
                <br /> {{ corpAddress }}
                <br /> {{ corpPhone }}
                <br /> {{ corpEmail }}
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
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/standard.js"></script>
    <link rel="stylesheet" href="css/popup.css" type="text/css" media="screen">
    <div class="bg_overlay"></div>
    <div class="overlay_info" id="dv_info">
      <div class="closediv">
        <a title="Close" href="javascript: close('dv_info');">close</a>
      </div>
      <div class="divbody">
        <div id="popupcopy"></div>
      </div>
    </div>
    <!----------------- terms pop modal ------------------------>
</body>
</html>
