<!DOCTYPE html>
<html lang="en">
    
<!--Designed By ALpha-->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="{$fullurl}/img/cwo-chameleon2.png" />

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="{$fullurl}/css/app.min.css">
		<title>..::{$sitename}::.. Login</title>
    </head>

    <body data-sa-theme="4">
        <div class="login">

            <!-- Login -->
			<div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <img src="{$fullurl}/img/cwo-chameleon2.png">
                    Welkom bij Chameleon! Log in alstublieft
                </div>

                <div class="login__block__body">
				{if isset($error)}
				<div class="alert alert-danger alert-dismissable"><strong>Oeps!</strong> {$error}
				</div>
				{elseif isset($success)}
				<div class="alert alert-danger alert-dismissable"><strong>Ziezo!</strong> {$success}
				</div>
				{else}
				<div class="alert alert-warning alert-dismissable"><strong>Oeps!</strong> Gelieve eerst inloggen!
				</div>
				{/if}
				<form class="form-signin" role="form" method="POST" action="{$fullurl}/login">
			    <input type="text" class="form-control" name="login" placeholder="Nicknaam" required autofocus>
                <input type="password" class="form-control" name="pass" placeholder="Wachtwoord" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
				
            </form>
			<br>
			<br>
			<form class="form-signin" role="form" method="" action="register.php">
			<h4 class="form-signin-heading">Nog geen account?</h4>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Registreer</button>
                </div>
            </div>
			
			
        </div>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{$fullurl}/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- App functions and actions -->
        <script src="{$fullurl}/js/app.min.js"></script>
    </body>

<!--Designed By ALpha-->
</html>