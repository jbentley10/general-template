<?php
 include("config.php");

//echo $productName;

require_once('lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader, array(
 // 'cache' => 'cache',
));

echo $twig->render('ingredients_view.php', array('productName' => $productName, 'price' => $price, 'color0' => $color0, 'color1' => $color1, 'color2' => $color2, 'color3' => $color3, 'color4' => $color4,'color5' => $color5,'color6' => $color6,'trialPeriod' => $trialPeriod, 'rebillPrice' => $rebillPrice, 'trialPrice' => $trialPrice, 'corpEmail' => $email, 'corpPhone' => $phone, 'corpAddress' => $coprAddress, 'returnAddress' => $returnAddress, 'corpName' => $corpName, 'url' => $url));
?>