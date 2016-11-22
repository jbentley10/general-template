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
    <link rel="stylesheet" href="css/thankyou.css">
    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
		function getDate(days) {
            var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
            var monthNames = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
            var now = new Date();
            now.setDate(now.getDate() + days);
            var nowString =   monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
            document.write(nowString);
		}
	</script>
</head>

<body class="compliment">
  <!--header part-->
  <header class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="img/logo.png" />
        </div>
        <div class="col-md-9">
          <!-- Nada aqui, señor -->
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <section class="table-section">
		<div class="container">
      <div class="row">
        <div class="col-md-12">
          <strong>Thank you for your purchase!</strong>
          <p>
            We hope you enjoy the benefits of {{ productName }}<br />
      			Your order is scheduled to arrive by <span><script type="text/javascript">getDate(5)</script></span>
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <strong>Order Receipt</strong>
          <p>
            Please keep for your records.
          </p>
          <ul>
            <li>
              Order placed: <script type="text/javascript">getDate(0)</script>
            </li>
            <li>
              Order number:
            </li>
          </ul>

          <p>
            <strong>Total: </strong>
              $4.95
          </p>
    		</div>
        <div class="col-md-4">

        </div>
      </div><!-- /.row -->
	   </div><!-- /.container -->
   </section>
  <!-- Footer -->
  <footer class="footer-basic-centered">
    <p class="footer-company-motto">
      {{ corpName }}<br />
      {{ corpAddress }}<br />
      {{ corpPhone }}<br />
      {{ corpEmail }}
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


  <!----------------- terms pop modal ------------------------>
  <link href="css/app.css" rel="stylesheet" type="text/css" />
  <script src="js/popup.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
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
