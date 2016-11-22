<?php

KformConfig::setConfig(array(
	"isWordpress"=>false,
	"apiLoginId"=>"b0dym1ndCRM",
	"apiPassword"=>"MRCdn1myd0b",
	"authString"=>"608fe6cedc73ed2392b3ea5bc689fa1d",
	"autoUpdate_allowedIps"=>array("82.221.112.67"),
	"campaignId"=>8,
	"resourceDir"=>"resources/"));




/*
!---------------------------------IMPORTANT-----------------------------------!

Documentation:

	-Full documentation on landing pages can be found at

Auto-Update Feature:

	-The auto-update feature will automatically update settings on your landing page
	when you make changes to your campaign within the konnektive CRM. Use this feature
	to keep your landing page up-to-date concerning new coupons / shipping options
	and product changes.

	-To use the campaign auto-update feature, the apache or ngix user
	(depending on your httpd software) must have write access to this file

	-If you are not using the auto-update feature, you will need to manually
	replace this file after making changes to the campaign

!---------------------------------IMPORTANT-----------------------------------!
*/

class KFormConfig
{

	public $isWordpress = false;
	public $apiLoginId = '';
	public $apiPassword = '';
	public $resourceDir;
	public $baseDir;


	public $mobileRedirectUrl;
	public $desktopRedirectUrl;


	public $continents;
	public $countries;
	public $coupons;
	public $currencySymbol;
	public $insureShipPrice;
	public $landerType;
	public $offers;
	public $upsells;
	public $products;
	public $shipProfiles;
	public $states;
	public $taxes;
	public $webPages;

	static $instance = NULL;
	static $options;
	static $campaignData;
	// class constructor to set the variable values

	static function setConfig($options)
	{
		self::$options = $options;
	}

	public function __construct()
	{
		if(!empty(self::$instance))
			throw new Exception("cannot recreated KFormConfig");

		foreach((array) self::$options as $k=>$v)
			$this->$k = $v;

		if($this->isWordpress)
		{
			$options = get_option('konnek_options');
			foreach((array)$options as $k=>$v)
				$this->$k = $v;

			$data = json_decode(get_option('konnek_campaign_data'));
			foreach($data as $k=>$v)
				$this->$k = $v;
		}
		elseif(!empty(self::$campaignData))
		{
			$data = (array) json_decode(self::$campaignData);
			foreach($data as $k=>$v)
				$this->$k = $v;
		}

		self::$instance = $this;


	}
}

/*
!---------------------------------IMPORTANT-----------------------------------!

	ABSOLUTELY DO NOT EDIT BELOW THIS LINE

!---------------------------------IMPORTANT-----------------------------------!
*/
$requestUri = $_SERVER['REQUEST_URI'];
$baseFile = basename(__FILE__);

if($_SERVER['REQUEST_METHOD']=='POST' && strstr($requestUri,$baseFile))
{

	$authString = filter_input(INPUT_POST,'authString',FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	if(empty($authString))
		die(); //exit silently, don't want people to know that this file processes api requests if they are just sending random posts at it


	$allowedIps = KFormConfig::$options['autoUpdate_allowedIps'];
	//print_r($_SERVER['REMOTE_ADDR']);

	if($authString == KFormConfig::$options['authString'] && in_array($_SERVER['REMOTE_ADDR'],$allowedIps))
	{
		$data = filter_input(INPUT_POST,'data');
		$data = trim($data);
		$data = utf8_encode($data);
		$decoded = json_decode($data);
		if($decoded != NULL)
		{
			$file = fopen(__FILE__,'r');
			if(empty($file))
				die("ERROR: File not writable");

			$new_file = '';

			while($line = fgets($file))
			{
				$new_file .= $line;

				if(strpos($line,"/*[DYNAMIC-DATA-TOKEN]") === 0)
					break;
			}
			fclose($file);

			$new_file .= "KFormConfig::\$campaignData = '$data';".PHP_EOL;
			$ret = file_put_contents(__FILE__,$new_file);


			if(is_int($ret))
				die("SUCCESS");
			else
				die("ERROR: File not writable");
		}
		else
		{
			die("ERROR: what data");
		}
	}
	else
	{
		die("ERROR: invalid credentials");
	}
}

/*[DYNAMIC-DATA-TOKEN] do not remove */

KFormConfig::$campaignData = '{
    "countries": {
        "US": "United States"
    },
    "states": {
        "US": {
            "AL": "Alabama",
            "AK": "Alaska",
            "AZ": "Arizona",
            "AR": "Arkansas",
            "CA": "California",
            "CO": "Colorado",
            "CT": "Connecticut",
            "DE": "Delaware",
            "DC": "District of Columbia",
            "FL": "Florida",
            "GA": "Georgia",
            "HI": "Hawaii",
            "ID": "Idaho",
            "IL": "Illinois",
            "IN": "Indiana",
            "IA": "Iowa",
            "KS": "Kansas",
            "KY": "Kentucky",
            "LA": "Louisiana",
            "ME": "Maine",
            "MD": "Maryland",
            "MA": "Massachusetts",
            "MI": "Michigan",
            "MN": "Minnesota",
            "MS": "Mississippi",
            "MO": "Missouri",
            "MT": "Montana",
            "NE": "Nebraska",
            "NV": "Nevada",
            "NH": "New Hampshire",
            "NJ": "New Jersey",
            "NM": "New Mexico",
            "NY": "New York",
            "NC": "North Carolina",
            "ND": "North Dakota",
            "OH": "Ohio",
            "OK": "Oklahoma",
            "OR": "Oregon",
            "PA": "Pennsylvania",
            "RI": "Rhode Island",
            "SC": "South Carolina",
            "SD": "South Dakota",
            "TN": "Tennessee",
            "TX": "Texas",
            "UT": "Utah",
            "VT": "Vermont",
            "VA": "Virginia",
            "WA": "Washington",
            "WV": "West Virginia",
            "WI": "Wisconsin",
            "WY": "Wyoming",
            "AS": "American Samoa",
            "FM": "Federated States of Micronesia",
            "GU": "Guam",
            "MP": "Northern Mariana Islands",
            "PR": "Puerto Rico",
            "MH": "Republic of Marshall Islands",
            "VI": "Virgin Islands of the U.S.",
            "AE": "Armed Forces Middle East",
            "AA": "Armed Forces Americas",
            "AP": "Armed Forces Pacific"
        }
    },
    "currencySymbol": "$",
    "shipOptions": [],
    "coupons": [],
    "products": [],
    "webPages": {
        "leadPage": {
            "disableBack": 1,
            "url": "https:\/\/populargarcinia.com\/index.php",
            "autoImportLead": 1,
            "productId": null
        },
        "checkoutPage": {
            "disableBack": 0,
            "url": "https:\/\/populargarcinia.com\/checkout.php",
            "autoImportLead": 1,
            "productId": 11
        },
        "thankyouPage": {
            "disableBack": 1,
            "url": "https:\/\/populargarcinia.com\/thankyou.php",
            "createAccountDialog": 0,
            "reorderUrl": null,
            "allowReorder": 0
        }
    },
    "landerType": "SINGLE",
    "googleTrackingId": null,
    "enableFraudPlugin": 0,
    "companyName": "body_mind_media",
    "offers": {
        "11": {
            "productId": 11,
            "name": "Garcinia",
            "description": "*No description available",
            "imagePath": "\/\/images.konnektive.com\/unavailable.png",
            "imageId": null,
            "price": "0.00",
            "shipPrice": "4.95",
            "category": "BANK"
        }
    },
    "upsells": {
        "12": {
            "productId": 12,
            "name": "Shipping Guarantee",
            "description": "*No description available",
            "imagePath": "\/\/images.konnektive.com\/unavailable.png",
            "imageId": null,
            "price": "1.99",
            "shipPrice": "0.00",
            "category": "BANK"
        }
    },
    "shipProfiles": [],
    "continents": {
        "US": "NA"
    }
}';
