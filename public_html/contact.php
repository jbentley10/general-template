<?php
 include("config.php");

//echo $productName;

require_once('lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader, array(
 // 'cache' => 'cache',
));

echo $twig->render('contact_view.php', array('productName' => $productName, 'price' => $price, 'color0' => $color0, 'color1' => $color1, 'color2' => $color2, 'color3' => $color3, 'color4' => $color4,'color5' => $color5,'color6' => $color6,'trialPeriod' => $trialPeriod, 'rebillPrice' => $rebillPrice, 'trialPrice' => $trialPrice, 'email' => $email, 'phone' => $phone, 'corpAddress' => $corpAddress, 'returnAddress' => $returnAddress, 'corpName' => $corpName, 'total' => $total, 'url' => $url, 'hours' => $hours));
?>