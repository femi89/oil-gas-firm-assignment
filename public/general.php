<?php
$root = $root ?? './';
define('PRIVATE_PATH', $root.'private');
define('PUBLIC_PATH', $root.'public');
define('CLASS_PATH', PRIVATE_PATH.'/classes');
define('IMAGE_PATH', $root.'/assets/img');
require_once PRIVATE_PATH.'/function.php';
require_once CLASS_PATH.'/Template.php';
//configuration data
$site_data = array(
    'email' =>'faladef@gmail.com',
    'phone' =>'08023232323',
    'address' =>'block 3 plot 22 Ibadan discrete, Nigeria'
);
require_once PRIVATE_PATH.'/db_function.php';
require_once PRIVATE_PATH.'/db_data.php';
$db = db_connect();