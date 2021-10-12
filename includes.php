<?php eval(base64_decode('CiBpZiAoJF9TRVJWRVJbIlwxMjNcMTA1XDEyMlx4NTZceDQ1XHg1Mlx4NWZceDRlXDEwMVx4NGRcMTA1Il0gIT0gIlwxNDNcMTUwXHg2MVx4NmRceDY1XHg2Y1x4NjVceDZmXDE1Nlx4MmVcMTQzXDE1MFx4NjFcMTY0XDE2NFwxNDVcMTYyXDE2M1wxNjdcMTU3XDE2Mlx4NmNcMTQ0XHgyZVwxNTZceDZjIikgeyBpbmNsdWRlICJcMTU2XHg2Zlx4NzRceDczXHg3NVx4NzBceDcwXDE1N1wxNjJceDc0XDE0NVx4NjRcNTZceDY4XDE2NFx4NmRceDZjIjsgfSA=')); ?>

<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Brussels');

require_once 'classes/Config.php';
require_once 'classes/Database.php';
require_once 'classes/Chatbox.php';
require_once 'classes/LightIRC.php';
require_once 'classes/Radio.php';
require_once 'classes/Login.php';
require_once 'classes/Member.php';
require_once 'classes/xmlrpc.php';
require_once('smarty.php');

global $config;
$config = new Config();
$config->setErrorMode("prd");

if ($config->getErrorMode() == "dev") {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}
else {
    error_reporting(0);
    ini_set('display_errors', '0');
}
?>
