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
<link rel="stylesheet" href="css/styles_checkout.css">
	<style>
		.row {
			background:#fff !important;
		}
		.label {
			color:#000 !important;
		}
	</style>
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

	<style>
     	.primary {
		background-color:#{{color0}} !important;
		}
		div#formWrap {
		background:#{{color1}};
		}
		.btn {
		background: -webkit-radial-gradient(#{{color2}},#{{color3}});
		background: radial-gradient(#{{color2}},#{{color3}});
		}
		.btn:hover {
		background: #{{color6}};
		}
		#logoText {
		margin: 0 !important
		}

		.row {
		background: #fff !important;
		}
		.label {
		color: #000 !important;
		}

		/* site body background class */
		.compliment {
		background-color: #{{color0}} !important;
		}

		.tos > .form-control-feedback {
		left: -25px;
		top: -4px;
		}
		select#cardExpMonth {
		width: 48%;
		float: left;
		margin: 5px 8px 4px 0;
		}
		select#cardExpYear {
		width: 48%;
		}
    </style>
    {% include "fonts.html" %}
    </head>


<body class="compliment">

    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container " >
         <!-- Heading Row -->
        <!-- <div class="row logo"><div class="col-xs-12"></div></div> -->
		<div class="row checkRow">
            <div class="col-xs-6 col-md-8">
				<div id="logoText" class="pull-left">
					<!-- <img src="img/logo.png" /> -->
				 	<span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span><br>
                    <span id="{{fontNumber}}-B" >{{brandedName2}}</span>
				</div>


            </div>
            <!-- /.col-md-8 -->
            <div class="col-xs-6 col-md-4">
				<div class="smBtlWrap pull-right">
					<div class="smBtlLogo">
						<!-- <img src="img/logo.png" class="img-responsive center-block" /> -->
						<span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span>
                    	<span id="{{fontNumber}}-B" >{{brandedName2}}</span>
					</div>
				</div><!--/smBtlWrap-->
            </div>
            <!-- /.col-md-4 -->
        </div><!--/row-->

		<div class="row topform-callout-text">
			<p>
				<br />
				<strong>THANK YOU FOR YOUR PURCHASE</strong></p>
			<p>We hope you enjoy the benefits of {{ productName }}<br />
			Your order is scheduled to arrive by <span><script type="text/javascript">getDate(5)</script></span></p>
			<hr />
      <div class="col-sm-6 col-md-6">
				<div class="lgBtlWrap center-block">
					<div class="lgBtlLogo">
						<!-- <img src="img/logo.png" class="img-responsive center-block" /> -->
						<span id="{{fontNumber}}-A" class="font-effect-shadow-multiple">{{brandedName1}}</span>
                    	<span id="{{fontNumber}}-B" >{{brandedName2}}</span>
					</div>
				</div><!--/lgBtl02Wrap-->
			</div><!--/col-md-3-->
			<div class="col-xs-offset-2 col-sm-offset-0 col-xs-10 col-sm-6 col-md-6" style="text-align:left !important;">
				<div class="row text-left">
					<h2><strong class="caps">ORDER RECEIPT</strong><br>
						<small>{{ productName }}</small></h2></div >
					 <br>
				<div class="row btm15"><b>Order placed:</b> <script type="text/javascript">getDate(0)</script></div>
                <div class="row btm15"><b>Order Id:</b> {{ orderId }}</div>
                <div class="row btm15"><b>Shipping:</b> $0.00</div>
                <div class="row btm15"><b>Shipping Insurance:</b> ${{ subTotal }}</div>
                <div class="row btm15bdr"><b>TOTAL: </b> ${{ orderTotal }}</div>
			</div><!--/col-md-6-->

        </div><!-- /.row -->
	</div><!-- /.container -->



	<div class="container">

    <!-- Footer -->
    <footer class="footer-basic-centered">

        <p class="footer-company-motto">
			{{ corpName }}<br />
			{{ corpAddress }}<br />
			{{ phone }}<br />
			{{ email }}
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

	</div><!--/container-->





	<!----------------- terms pop modal ------------------------>
	<link href="css/app.css" rel="stylesheet" type="text/css" />
	<script src="js/popup.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
