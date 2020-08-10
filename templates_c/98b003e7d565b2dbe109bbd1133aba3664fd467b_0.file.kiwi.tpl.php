<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-10 21:49:16
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f31a4bc9059b1_60273395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b003e7d565b2dbe109bbd1133aba3664fd467b' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi.tpl',
      1 => 1597088951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f31a4bc9059b1_60273395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Facebook Pixel Code -->

<?php echo '<script'; ?>
>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '311596215978856');
  fbq('track', 'MobileCWO');
<?php echo '</script'; ?>
>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=311596215978856&ev=MobileCWO&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php echo '<script'; ?>
 type="text/javascript" src="../analyticstracking.js"><?php echo '</script'; ?>
>

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Ares Verzoekserver, maak hem nu gratis aan!" />
<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="description" content="Waar chatten, chatten is!"/>
<meta property="og:locale" content="nl_NL" />
<meta property="og:type" content="website" />
<meta property="og:title" content="#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
 Chameleon | Chattersworld | Waar chatten, chatten is!" />
<meta property="og:description" content="#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
 Chattersworld Chameleon, deze chat is gemaakt door Chameleon op Chattersworld.nl" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=<?php echo $_GET['id'];?>
" />

<meta property="og:type" content="article" />
<meta property="og:title" content="..::Chattersworld Chameleon::.. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
" />
<meta property="og:site_name" content="..::Chattersworld Chameleon::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" sizes="32x32" />
<?php } else { ?>
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {?>cwobg.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
}?>" />
<link rel="icon" href="<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {
echo $_smarty_tpl->tpl_vars['logo']->value;
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
}?>" sizes="32x32" />
<?php }?>
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::Chattersworld Chameleon::.." />
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=<?php echo $_GET['id'];?>
" />
<link rel="stylesheet" href="dist/magnific-popup.css">
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"><title>Kiwi IRC</title>

<style>/* target specific styles */
    html { height: 100%; overflow: hidden; }
	body { height:100%;
               margin:0;
               padding:0;
			   <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
               background-color:<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];?>
;	}
			   <?php } else { ?>
			   <?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {?>
			   background-image:url("<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
");
			   <?php } else { ?>
			   background-image:url("cwobg.jpg");
			   <?php }?>
			   background-repeat: no-repeat;
			      background-size: 100% 100%; }
			   <?php }?>
			   body {
    font-family: "Lato", sans-serif;
}
			   
	#BbfWjPzRoMSm {
display: none;
margin-bottom: 0;
height: 60px;
padding: 20px 10px;
background: #D30000;
font-weight: bold;
text-align: center;
color: #fff;
border-radius: 0px;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 12;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
overflow: hidden;
}
.sidenav span {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 22px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    bottom: 50px;
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "hero") {?>
    right: 15px;
	<?php } else { ?>
	right: 356px;
	<?php }?>
    font-size: 36px;
    margin-left: 50px;
}
.white-popup {
  position: relative;
  background: #000000;
  padding: 0px;
  width: auto;
  max-width: 810px;
  margin: 0px auto;
}

.right { 
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "hero") {?>
float:right; 
right: 5px;
<?php } else { ?>
float:right;
right: 356px;
<?php }?>
display: block; 
position: absolute;
bottom: 2px;
}
.left { 
float:left; 
display: block; 
position: absolute;
    left: 2px;
    bottom: 2px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.lunaresponsive {/*Large Screen Height*/
		height:80px;
	}
	@media only screen and (min-width: 600px) and (max-width:959px) {
		.lunaresponsive {/*Medium Screen Height*/
			height:60px;
		}
	}
	@media only screen and (max-width:599px) {
		.lunaresponsive {/*Small Screen Height*/
			height:40px;
		}
	}

	</style><style class=embedly-css>.card .hdr {
            display:none;
		   }
		   
		    .kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
 .kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
 .kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
 .kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
 .kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['prefixicons'] == "true") {?>
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
 .kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
 .kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
 .kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
 .kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick--prefix {
	content: url(lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
<?php }?>
.kiwi-messagelist {
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
			   <?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgcolor'] == '#000000') {?>background-color:rgba(0,0,0, .50);<?php } else { ?>
               background-color:#FFF;<?php }?>	
			   }
			   <?php } else { ?>
    background-image: linear-gradient(rgba(255,255,255, .50), rgba(255,255,255, .50)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
); 
	<?php }?>
	background-size: 100% 100%; }
	
	 
}
.kiwi-statebrowser-channel[data-name="#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
"]::before {
    content: "\f075";
    font-family: fontawesome;
    margin-right: 5px;
}
.kiwi-statebrowser-channel[data-name="#help"]::before {
    content: "\f128";
    font-family: fontawesome;
    margin-right: 5px;
}

</style>

<link href="static/css/app.d11ee53b.css" rel="preload" as="style"><link href="static/js/app.71bcf681.js" rel="preload" as="script"><link href="static/js/vendor.0d970857.js" rel="preload" as="script"><link href="static/css/app.d11ee53b.css" rel="stylesheet"></head><body>
<div class="left">
<a target="_blank" href="https://chattersworld.nl"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" style="z-index: 102;" height="50" alt="Chattersworld"></a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<center><a target="_blank" href="https://chattersworld.nl"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="100" alt="Chattersworld"></a></center>
<br>
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'] != '' && $_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
" data-mfp-src="#test-popup" class="open-popup-link"><img src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/radio/request1.png" width="25px" height="25px" alt="Verzoek Aanvragen">&nbsp;Verzoekje Doen</a>
<br />
<?php } else { ?>
<a target="_blank" href="https://chattersworld.nl"><img src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/radio/request1.png" width="25px" height="25px" alt="Maak je eigen chatbox!">&nbsp;Maak je eigen chatbox!</a>
<?php }?>
<br />
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/webplayer.php?id=<?php echo $_GET['id'];?>
" target="_new" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/webplayer.php?id=<?php echo $_GET['id'];?>
','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><img src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/radio/regels1.png" width="25px" height="25px" alt="Chameleon Webplayer">&nbsp;Webplayer</a>
<?php }?>
<br />

<br>

</div>
<div class="right"><span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">&#9776;</span></div>
<noscript><div class=kiwi-noscript-warn>Please enable JavaScript and refresh the page to use this website.</div></noscript><div id=app></div><?php echo '<script'; ?>
 type="text/javascript" src="static/js/vendor.0d970857.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="static/js/app.71bcf681.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
	
	function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
 <?php echo '</script'; ?>
>
<div id="test-popup" class="white-popup mfp-hide">
  <iframe src="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
</div>
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
><?php }
}
