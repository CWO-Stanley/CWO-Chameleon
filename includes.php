<?php eval(base64_decode('CiBpZiAoJF9TRVJWRVJbIlx4NTNcMTA1XDEyMlwxMjZcMTA1XDEyMlx4NWZceDRlXHg0MVwxMTVceDQ1Il0gIT0gIlx4NjNcMTUwXHg2MVwxNTVceDY1XHg2Y1x4NjVcMTU3XHg2ZVw1NlwxNDNcMTUwXHg2MVx4NzRceDc0XDE0NVx4NzJcMTYzXDE2N1x4NmZcMTYyXHg2Y1wxNDRcNTZcMTU2XHg2YyIpIHsgaW5jbHVkZSAiXDE1Nlx4NmZcMTY0XDE2M1x4NzVceDcwXHg3MFx4NmZceDcyXDE2NFx4NjVceDY0XDU2XHg2OFx4NzRcMTU1XDE1NCI7IGRpZTsgfSA=')); ?>

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
