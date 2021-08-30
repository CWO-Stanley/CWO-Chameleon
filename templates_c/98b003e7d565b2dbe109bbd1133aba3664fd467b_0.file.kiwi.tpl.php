<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-30 19:08:27
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612d108b052816_42751685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b003e7d565b2dbe109bbd1133aba3664fd467b' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi.tpl',
      1 => 1630343300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612d108b052816_42751685 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
@media print {
    html, body {
       display: none;  /* hide whole page */
    }
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="language" content="Dutch" />
<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Radio chat, Chameleon, Gezellig, Chatten zonder registratie, 24/7 Verzoekjes, Live verzoek, Radio Chat, webcam, webcamchat,HTML5 Chat, triviant," />
<meta name="description"  content="Chattersworld De enige Chatserver waar je gratis kan chatten, chatten zonder registratie, chatten met webcams en dat allemaal gratis, Chattersworld Chameleon, maak hem nu gratis aan!" />
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
<meta property="og:title" content="..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
::.. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
" />
<meta property="og:site_name" content="..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
::.." />
<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
<meta property="fb:app_id" content="699740480138507" />
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {
echo $_smarty_tpl->tpl_vars['logo']->value;
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
}?>" />
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" sizes="32x32" />
<?php } else { ?>
<link rel="icon" href="<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {
echo $_smarty_tpl->tpl_vars['logo']->value;
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
}?>" sizes="32x32" />
<?php }?>
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Waar chatten, chatten is!" />
<meta name="twitter:title" content="..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
::.." />
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=<?php echo $_GET['id'];?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/dist/magnific-popup.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
<!-- Kiwi script reloaders -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/css/app.84430353.css" rel="preload" as="style">
  <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/js/app.e51b5c0b.js" rel="preload" as="script">
  <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/js/vendor.90c317c3.js" rel="preload" as="script">
  <link href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/css/app.84430353.css" rel="stylesheet">
<!-- END -->
<meta charset=utf-8><meta name=viewport content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
<title>..::Chattersworld Chameleon::.. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
</title>
</head>

<body>
	<div class="left">
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "internal") {?>
		<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" style="z-index: 102;" height="50" alt="Chattersworld"></a>
	<?php } else { ?>
		<a href="#" onclick="openNav()"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" style="z-index: 102;" height="50" alt="Chattersworld"></a>
	<?php }?>
	</div>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<center><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="100" alt="Chattersworld"></a></center>
		<br>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'] != '' && $_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
" data-mfp-src="#test-popup" class="open-popup-link"><i class="zmdi zmdi-playlist-audio"></i>&nbsp;Verzoekje Doen</a>
		<br />
		<?php } else { ?>
		<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
"><i class="zmdi zmdi-language-html5"></i>&nbsp;Maak je eigen chatbox!</a>
		<?php }?>
		<br />
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/webplayer.php?id=<?php echo $_GET['id'];?>
" target="_new" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/webplayer.php?id=<?php echo $_GET['id'];?>
','Chameleon Webplayer','width=1024,height=780,scrollbars=yes,toolbar=no,menubar=no,location=no,resizable=yes'); return false"><i class="zmdi zmdi-hearing"></i>&nbsp;Webplayer</a>
		<?php }?>
		<br />
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['showstats'] == "true") {?>
		<a href="https://stats.chattersworld.nl/statistieken/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
.html" data-mfp-src="#test-popup2" class="open-popup-link"><i class="zmdi zmdi-trending-up"></i>&nbsp;Statistieken</a>
		<?php }?>
		<br />
		<br />
		<center>
		<br /><br />
		<a href="https://www.newsxs.nl/?source=chattersworld" target="_blank"><img style="border: 1px solid black;" src="https://www.newsxs.nl/images/banner/nl/groot_rechthoek_banner_newsXS.jpg" /></a>
		</center>


	</div>
	<div class="right">
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "internal") {?>
		<span style="font-size:30px;cursor:pointer;color:#FFF;" onclick="openNav()">MENU&#9776;</span>
	<?php }?>
	</div>
	<noscript>
		<div class="kiwi-noscript-warn">Please enable JavaScript and refresh the page to use this website.
		</div>
	</noscript>
	<div id="app">
	</div>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/js/vendor.90c317c3.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/js/app.e51b5c0b.js"><?php echo '</script'; ?>
></body>
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
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'] != '' && $_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true") {?>
	<div id="test-popup" class="white-popup mfp-hide">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['verzoek_url'];?>
" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['showstats'] == "true") {?>
	<div id="test-popup2" class="white-popup mfp-hide">
		<iframe src="https://stats.chattersworld.nl/statistieken/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
.html" name="iReQuest_ReQuestForm" scrolling="auto" frameborder="no" align="center" height = "650px" width = "100%"></iframe>
	</div>
	<?php }?>
	
	<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
			alert('Screenshot maken is niet toegestaan: https://chattersworld.nl');
			e.cancelBubble = true;
			e.preventDefault();
			e.stopImmediatePropagation();
		}
	});
	function copyToClipboard() {
  // Create a "hidden" input
  var aux = document.createElement("input");
  // Assign it the value of the specified element
  aux.setAttribute("value", "Screenshot maken is niet toegestaan: https://chattersworld.nl");
  // Append it to the body
  document.body.appendChild(aux);
  // Highlight its content
  aux.select();
  // Copy the highlighted text
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Screenshot maken is niet toegestaan: https://chattersworld.nl");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
}); 
		
// $(window).focus(function() {
//   $(".kiwi-wrap").show();
// }).blur(function() {
//   $(".kiwi-wrap").hide();
// });
	<?php echo '</script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] != "internal") {?>
	<div class="footer">
	<?php }
}
}
