<?php

/*
    INIT
    Basic configuration settings
*/

// connect to database
$server = 'localhost';
$user = 'root';
$pass = 'Madiera3';
$db = 'ks_shop';

$Database = new mysqli($server, $user, $pass, $db);


// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);

// set up constants
define('SITE_NAME', 'My Online Store');
define('SITE_PATH', 'http://killersite.test/online_shop/online-shoping/');
define('IMAGE_PATH', 'http://killersite.test/phpcartoopmvc1/phpcartoopmvc-empty/resources/images/');

define('SHOP_TAX', '0.0875');

// define('PAYPAL_MODE', 'sandbox'); // either sandbox or live
// define('PAYPAL_CURRENCY', 'USD'); 
// define('PAYPAL_DEVID', 'AQK2ORAoc6ocd7v7fl-iJB5O3Hq_xNcCMf11YZmM6VFRopdxVGrXCoqiqOWn'); 
// define('PAYPAL_DEVSECRET', 'ECin5RD55B7Zx-3RvyA3HZJYjya-ndY0jQp6qmNHFss-68SbL77akWcd__-S'); 
// define('PAYPAL_LIVEID', ''); 
// define('PAYPAL_LIVESECRET', ''); 

// include or require_once objects
require_once 'app/models/m_template.php';
require_once 'app/models/m_categories.php';
require_once 'app/models/m_products.php';
require_once 'app/models/m_cart.php';


// create objects
$Template = new Template();
$Categories = new Categories();
$Products = new Products();
// $Cart = new Cart();