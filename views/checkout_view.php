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
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrapValidator.min.css">
  <link href="https://fonts.googleapis.com/css?family=Contrail+One|Black+Ops+One|Squada+One" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <!--[if IE]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/checkout.css" />
</head>

<body class="compliment">


  <!--header part-->

  <header class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img class="Muscle Enhance logo" src="img/logo.png" />
        </div>
        <div class="col-md-9">
          <!-- Nada aqui, señor -->
        </div>
      </div>
    </div>
  </header>

  <!--LEFT TABLE SECTION-->

  <section class="table-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3>Final Step</h3>
          <strong>Payment Information</strong>

          <!-- Form start -->
          <form id="index-form" method="post" action="thankyou.php">
                <div class="checkout-form-image cards-image"><img class="form-cc" src="img/cc.png" alt="Credit cards" ></div>

                <div id="billshipcheck" class="billshipsame">
                  <input class="checkbox" type="checkbox" style="display:inline;" class="form-control" name="billship" checked>
                  <label for='billShipSame'>
                    Billing Address same as Shipping
                  </label>
                </div>

                  <div id="hiddenbilling">
                    <div class="form-group">
                      <input type="text" id="billaddress" name="billaddress" class="form-control" placeholder="Address" oninvalid="this.setCustomValidity('Please enter your address')" onchange="this.setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <input type="text" id="billcity" class="form-control" name="billcity" placeholder="City">
                    </div>
                    <div class="form-group">
                      <select name="billstate" id="billstate" class="form-control" oninvalid="this.setCustomValidity('Please select your State')" onchange="this.setCustomValidity('')">
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
                    <div class="form-group">
                      <select name="billcountry" class="form-control" id="billcountry" oninvalid="this.setCustomValidity('Sorry The product is not availiable in your country')" onchange="this.setCustomValidity('')">
                        <option value="">Select Country</option>
                        <option value="US">United States</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="num" id="billzip" class="form-control" name="billzip" placeholder="Zip Code" maxlength="5" minlength="5" oninvalid="this.setCustomValidity('Please enter your ZIP code')" onchange="this.setCustomValidity('')">
                    </div>


                  </div>









                  <!--    <p class="log">Card Type</p>

                  <div class="form-group">
                  <select name="cardtype" required>
                  <option value="">Select Card</option>
                  <option value="visa">Visa</option>
                  <option value="mc">MasterCard</option>
                  <option value="amex">American Express</option>
                  <option value="disc">Discover</option>
                </select>
              </div>
            -->
            <label>Credit Card:</label>
            <div class="form-group">
              <input type="num" class="form-control ignore" id="ccnumber" name="ccnumber" placeholder="Card Number" required maxlength="16" minlength="15" title="Please enter a valid credit card">
            </div>

            <label>Expiration Date:</label>
            <div class="form-group">
              <select name="cardExpMonth" class="form-control" id="cardExpMonth">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
              <span class="glyphicon form-control-feedback" id="cardExpMonth1"></span>
            </div>
            <div class="form-group">
              <select name="cardExpYear" class="form-control" id="cardExpYear">
                <option value="2016" selected>2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select>
              <span class="glyphicon form-control-feedback" id="cardExpYear1"></span>
            </div>


            <label>CVV:</label>
            <div class="form-group">

              <input class="form-control ignore" type="num" id="cvvnumber" name="cvvnumber" placeholder="CVV" required maxlength="3" minlength="3" title="Please enter a valid credit card">
            </div>


            <div style="clear:both;"></div>
            <div class="form-group">
              <div class="tos">
                <input class="checkbox ignore" style="display:inline;" type="checkbox" name="confirm" required data-bv-feedbackicons-valid="null" data-bv-feedbackicons-invalid="null" data-bv-feedbackicons-validating="null" required id="tosCheck"> By placing an order with us, you agree to our full  <a class="footer-link" href="javascript:void(0);" onclick="javascript:openNewWindow('terms.php', 'modal');">Terms and Conditions</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of ${{ trialPrice }} . We will then immediately ship you your first bottle of {{ productName }}. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of ${{ rebillPrice }}  starting 45 days after you trial has been expired you will be shipped a recurring supply of {{ productName }} every 30 days and will be charged ${{ rebillPrice }} + ${{ trialPrice }}  for the total amount of ${{ total }}  for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call {{ phone }}  or contact us via email {{ email }} to cancel your membership and owe nothing more.
              </div>
            </div>
            <div class="btn-container">
              <button id="submit-btn" type="submit" name="sub-btn" class="btn button">Claim My Trial</button>
            </div>

          </form> <!-- form end -->

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-5">
          <div class="details column column60">
              <h2><strong class="caps">{{ productName }}</strong> <br>
                <small>Natural Weight Loss Formula
				  <br>
                30 Day Supply - 60 Capsules </small></h2>

              <div class="table clearfix">
              <div class="columns1 clearfix">
                  <div class="label column column80"><strong class="larger">Sub-Total</strong></div>
                  <div class="amount column column20 text-right"><strong class="">$0.00</strong></div>
                </div>
                <div class="columns clearfix">
                  <div class="label column column80"><strong class="cp_order">Shipping Fee:</strong></div>
                  <div class="amount column column20 text-right"><strong class="cp_order op_price">$4.95</strong></div>
                </div>



                <div class="columns1 clearfix">
                  <div class="label column column80 cp_total">TOTAL</div>
                  <div class="amount column column20 text-right cp_total" id="order_total">$4.95</div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--FOOTER SECTION-->


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

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/bootstrapValidator.min.js"></script>
  <script src="js/validation.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>


  <!----------------- terms pop modal ------------------------>
  <link href="css/app.css" rel="stylesheet" type="text/css" />
  <script src="js/popup.js" type="text/javascript"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script src="js/standard.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/popup.css" type="text/css" media="screen">
  <div class="bg_overlay">
  </div>
  <div class="overlay_info" id="dv_info">
    <div class="closediv">
      <a title="Close" href="javascript: close('dv_info');">close</a>
    </div>
    <div class="divbody">
      <div id="popupcopy">
      </div>
    </div>
  </div>
<!----------------- terms pop modal ------------------------>
</body>

</html>
