<?php

/**
 * XMLRPC Functions
 *
 * (C) 2003-2019 Anope Team
 * Contact us at team@anope.org
 */

class AnopeXMLRPC
{
	private $Host;

	function __construct($Host)
	{
		$this->Host = $Host;
	}

	/** Run an XMLRPC command. Name should be a query name and params an array of parameters, eg:
	 * $this->RunXMLRPC("checkAuthentication", array("adam", "qwerty"));
	 * If successful returns back an array of useful information.
	 *
	 * Note that $params["id"] is reserved for query ID, you may set it to something if you wish.
	 * If you do, the same ID will be passed back with the reply from Anope.
	 */
	function RunXMLRPC($name, $params)
	{
		$xmlquery = xmlrpc_encode_request($name, $params);
		$context = stream_context_create(array("http" => array(
			"method" => "POST",
			"header" => "Content-Type: text/xml",
			"content" => $xmlquery)));

		$inbuf = file_get_contents($this->Host, false, $context);
		$response = xmlrpc_decode($inbuf);

		if (isset($response))
			return $response;
		return NULL;
	}

	/** Do Command on Service as User, eg:
	 * $anope->DoCommand("ChanServ", "Adam", "REGISTER #adam");
	 * Returns an array of information regarding the command execution, if
	 * If 'online' is set to yes, then the reply to the command was sent to the user on IRC.
	 * If 'online' is set to no, then the reply to the command is in the array member 'return'
	 */
	function DoCommand($Service, $User, $Command)
	{
		return $this->RunXMLRPC("command", array($Service, $User, $Command));
	}

	/** Check an account/nick name and password to see if they are valid
	 * Returns the account display name if valid
	 */
	function CheckAuthentication($Account, $Pass)
	{
		$ret = $this->RunXMLRPC("checkAuthentication", array($Account, $Pass));

		if ($ret && $ret["result"] == "Success")
			return $ret["account"];
		return NULL;
	}

	/* Returns an array of misc stats regarding Anope
	 */
	function DoStats()
	{
		return $this->RunXMLRPC("stats", NULL);
	}

	/* Look up data for a channel
	 * Returns an array containing channel information, or an array of size one
	 * (just containing the name) if the channel does not exist
	 */
	function DoChannel($Channel)
	{
		return $this->RunXMLRPC("channel", array($Channel));
	}

	/* Like DoChannel(), but different.
	 */
	function DoUser($User)
	{
		return $this->RunXMLRPC("user", array($User));
	}
}

$anope = new AnopeXMLRPC("http://5.135.191.70:8085/xmlrpc");
?>
<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Ld_oMwZAAAAAKC8SWtyPmnRDFiJHi1gKlDwqQSY';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(trim($_POST['email']) == '' || trim($_POST['login']) == '' || trim($_POST['pass']) == '' || trim($_POST['pass2']) == '') {
				$errors =  'Alle velden dienen ingevuld te worden!';
	}else{
		if($_POST['pass'] == $_POST['pass2']) {
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$user = $_POST['login'];
				$password = $_POST['pass'];
				$email = $_POST['email'];
				$ret = $anope->DoCommand("NickServ", "$user", "REGISTER $password $email");
				if ($ret && $ret["result"] == "Success") {
					$success = "Succesvol geregistreerd, je kan nu inloggen!";
				}else{ 
					$errors = "Er is iets fout gegaan!";
				}
}
		}
	}
}
} else {
        $errors = 'Captcha not valid!';// Not verified - show form error
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/cwo-chameleon2.png" />

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73408859-2', { 'anonymize_ip': true });
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld_oMwZAAAAAGXMqYZmWxtfWAllrYYdSKtUn8SL"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Ld_oMwZAAAAAGXMqYZmWxtfWAllrYYdSKtUn8SL', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>        
        <!-- Custom CSS -->
		<title>..::Chattersworld Chameleon::.. Register</title>
    </head>
    <body data-sa-theme="4">
       <div class="login">

 <!-- Login -->
			<div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <img src="img/cwo-chameleon2.png">
                    Hallo daar! U kunt zich hier registreren.	 
</div>					
        <div class="container">
                
								<div class="alert alert-success alert-dismissable"><strong>Let op!</strong> Registeren geldt gelijk voor het netwerk, na registratie keer je gelijk terug naar het inlogscherm, je ontvangt geen bevestiging!
								</div>
								
								
                            
                
                
				<?php
                        if(isset($_POST['login'])) {
                            if(isset($errors)) {
                                echo '<div class="alert alert-danger alert-dismissable"><strong>' . htmlentities($errors) . '</strong>';
								echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
                            }

                            if(isset($success)) {
                                echo '<div class="alert alert-success alert-dismissable"><strong>' . htmlentities($success) . '</strong>';
								echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
								echo '<meta http-equiv="refresh" content="5; url=index.php" />';
								
                            }

                           
                        } ?>
            
            
            <form class="form-signin" role="form" method="POST" action="">
               				<script type="text/javascript">

				function CheckSpace(event)
				{
					if(event.which ==32)
					{
						event.preventDefault();
						return false;
					}
				}
				</script>
				<input type="email" class="form-control" name="email" placeholder="E-mail adres" required autofocus><br />
                <input type="text" class="form-control" name="login" placeholder="Nicknaam" onkeypress="CheckSpace(event)" required><br />
				<input type="password" class="form-control" name="pass" placeholder="Wachtwoord" required><br />
				<input type="password" class="form-control" name="pass2" placeholder="Herhaal Wachtwoord" required>
				
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registreer</button>
				<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
			<br>
			<br>
			<form class="form-signin" role="form" method="" action="/">
                <h2 class="form-signin-heading">Of log in:</h2>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
				</form>

        </div>
		<br />
        <center>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Chatbottom -->
            <ins class="adsbygoogle"
                 style="display:inline-block;height:90px"
                 data-ad-client="ca-pub-9106844814451489"
                 data-ad-slot="2999842055"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </center>
		</div>
		</div>
		<!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>

</html>
