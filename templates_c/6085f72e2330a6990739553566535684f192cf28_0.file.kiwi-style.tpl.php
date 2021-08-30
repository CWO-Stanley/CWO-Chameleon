<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-12 20:10:26
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-style.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ec8592ddb7b6_60708173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6085f72e2330a6990739553566535684f192cf28' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-style.tpl',
      1 => 1626113420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ec8592ddb7b6_60708173 (Smarty_Internal_Template $_smarty_tpl) {
?><style>/* target specific styles */
html { 
	height: 100%; 
	overflow: hidden; 
}
body {
	height:100%;
    margin:0;
    padding:0;
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
    background-color:<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "html5color") {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}?>;	
}
<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {?>
	background-image:url("<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
");
<?php } else { ?>
	background-image:url("https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg");
<?php }?>
	background-repeat: no-repeat;
	background-size: 100% 100%; 
}
	<?php }?>
body {
    font-family: "Lato", sans-serif;
}
.kiwi-wrap {
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "internal") {?>
		height: 100%;
		<?php } else { ?>height: calc(100% - 120px);
		<?php }?>
	}
			   
.footer { 
	position: absolute; 
	bottom: 0; 
	height: 120px; 
	width: 100%; 
	margin: auto;
 
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
    	background-color:<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "html5color") {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}?>;	
}
<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
	background-color:#001a33;
	<?php } else { ?>/* background-color:transparent; */
	<?php }
} else { ?>
	background-image:url("https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg");
<?php }?>
 }
<?php }?>

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
    top: 5px;
	
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "hero") {?>
    right: 356px;
	<?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "stenly") {?>
	right: 110px;
	<?php } else { ?>
	right: 15px;
	<?php }?>
    font-size: 36px;
    margin-left: 50px;
	z-index: 99999999;
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
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "hero") {?>
	float:right; 
	right: 356px;
<?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "stenly") {?>
	float:right;
	right: 110px;
<?php } else { ?>
	float:right;
	right: 5px;
<?php }?>
	display: block; 
	position: absolute;
	bottom: 2px;
	z-index: 9999999;
}
.left { 
	float:left; 
	display: block; 
	position: absolute;
    left: 2px;
    bottom: 2px;
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "stenly") {?>
	z-index: 99999;
<?php } else { ?>
	z-index: 9999999;
<?php }?>
}
#my_centered_buttons { display: flex; justify-content: center;}
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

</style>

<style class="embedly-css">
.card .hdr {
     display:none;
}
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['icons'] != '') {?>
.kiwi-nicklist-user--mode-q .kiwi-nicklist-user-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
.kiwi-nicklist-user--mode-a .kiwi-nicklist-user-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
.kiwi-nicklist-user--mode-o .kiwi-nicklist-user-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
.kiwi-nicklist-user--mode-h .kiwi-nicklist-user-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
.kiwi-nicklist-user--mode-v .kiwi-nicklist-user-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['prefixicons'] == "true") {?>
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick--prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick--prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick--prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick--prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick--prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
.kiwi-messagelist-nick--mode-q .kiwi-messagelist-nick-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/owner.png)
}
.kiwi-messagelist-nick--mode-a .kiwi-messagelist-nick-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/admin.png)
}
.kiwi-messagelist-nick--mode-o .kiwi-messagelist-nick-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/operator.png)
}
.kiwi-messagelist-nick--mode-h .kiwi-messagelist-nick-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/halfop.png)
}
.kiwi-messagelist-nick--mode-v .kiwi-messagelist-nick-prefix {
	content: url(<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/lirc-resources/icons/<?php echo $_smarty_tpl->tpl_vars['metadata']->value['icons'];?>
/voice.png)
}
<?php }
}
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "nightswatch") {?>
.kiwi-messagelist {
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
if ($_smarty_tpl->tpl_vars['metadata']->value['bgcolor'] == '#000000') {?>
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {?>
	background-color:rgba(0,0,0);<?php } else { ?>
	background-image: linear-gradient(rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
), rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
);background-size: 100% 100%;<?php }?>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] == '') {?>
    background-image: linear-gradient(rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
), rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
)), url(https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg);background-size: 100% 100%;<?php } else { ?>
	background-image: linear-gradient(rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
), rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
);background-size: 100% 100%;<?php }
}?>
}
<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
    background-image: linear-gradient(rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
), rgba(255,255,255, <?php echo $_smarty_tpl->tpl_vars['metadata']->value['transparantie'];?>
)), url(<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
);background-size: 100% 100%; 
	<?php }?>
} 
<?php }?>
	<?php }?>
.kiwi-statebrowser-channel[data-name="#<?php echo mb_strtolower($_smarty_tpl->tpl_vars['metadata']->value['name'], 'UTF-8');?>
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

.fa-paint-brush:before {
    content: "\F1FC";
    color: #ac23f7;
}

.fa-smile-o:before {
    content: "\F118";
    color: #3183c7;
    font-size: 20px;
    font-weight: 700;
}
.fa-picture-o:before {
    content: "\F03E";
    font-size: 19px;
    color: #902b5f;
}
.fa-cog:before {
    color:#d87906;
    font-size: large;
}
.fa-close:before, .fa-times:before {
    color:#c70101;
}
.fa-list:before {
    color:#005a20;
}
.fa-comment:before {
	content: "\f075";
    color:#026302;
}
.fa-comment-o:before {
	content: "\f075";
    color:#ff8c00;
}
.fa-info:before {
    color:#a500ff;
    font-size: large;
}
.fa-chevron-right:before{
    margin: inherit;
	cursor:pointer;
    font-size: 27px;
    font-weight: 100;
    content: "\f01d";
    color: red;
    height: -webkit-fill-available;
}
.fa-users:before {
    color:#005093;
}
.fa-coffee:before {
    color: #743a00;
    font-size: large;
}
.fa-camera:before {
    content: "\F030";
    font-size: 19px;
    color: #0957b9eb;
}
.fa-adjust:before {
    content: "\f1fc";
    color: #00f;

}
.fa-registered:before {
    content: "\F25D";
    color: #0404bf;
    font-size: 18px;
}

.fa-lock:before {
    content: "\F023";
    font-size: 16px;
    margin: 0.1em;
    color: #484848;
}
.fa-navicon:before, .fa-reorder:before, .fa-bars:before {
    content: "\f138 ";
    font-size: 19px;
    color: #bf1f24;
}

.fa-send:before, .fa-paper-plane:before {
    content: "\F1D8";
    font-size: 17px;
    color: #00632c;
}
.kiwi-startup-common-section-info-content div {
	width:420px;
	margin:0!important;
	display:flex;
}

.kiwi-startup-common-section-info-content img {
	height:48px;
}

.kiwi-startup-common-section-info-content .netlogo {
	height:72px;
	padding:12px;
	display:block;
	width:100%;
	margin-bottom:0;
	border-radius:5px 5px 0 0!important;
	background-color:#444!important;
	box-sizing:border-box;
	border-bottom:1px solid #333!important;
	border-top:1px solid #222!important;
	border-right:1px solid #222!important;
	border-left:1px solid #222!important;
}

.kiwi-startup-common-section-info-content .netlogo:link {
	text-decoration:none;
	cursor:hand;
}

.kiwi-startup-common-section-info-content .netlogo:hover {
	background-color:#444!important;
}

.u-cpanel {
	width:100%;
	max-width:420px;
	line-height:72px;
	padding:0;
	text-transform:uppercase!important;
	letter-spacing:1px;
	font-weight:400;
	text-shadow:none;
	margin:0;
	transition:all .2s;
	border:none;
	background-color:#444!important;
	border-bottom:1px solid #222!important;
	text-decoration:none!important;
	font-size:.6em!important;
	white-space:nowrap;
	box-sizing:border-box;
	border-top:1px solid grey!important;
}

.kiwi-startup-common-section-info-content a:first-child {
	border-radius:0 0 0 5px;
	border-left:1px solid #222!important;
}

.kiwi-startup-common-section-info-content a:last-child {
	border-radius:0 0 5px 0;
	border-right:1px solid #222!important;
}

.kiwi-startup-common-section-info-content a:link {
	color:#f1f1f1!important;
}

.kiwi-startup-common-section-info-content a:visited {
	color:#f1f1f1!important;
}

.kiwi-startup-common-section-info-content a:active {
	color:#f1f1f1!important;
}

.kiwi-startup-common-section-info-content a:hover {
	color:#fff!important;
	background-color:grey!important;
}

.kiwi-welcome-simple-section-info-content {
	background:transparent;
}

.kiwi-startup-common-section-info-content {
	background:transparent;
}

kiwi-welcome-simple-sex {
	margin-left:5px;
}

.kiwi-avatar > span, .kiwi-avatar--image>span {
	border: 0px solid;
}
.kiwi-avatar--image>span {
	background-color: transparent !important;
}

.kiwi-avatar--default {
    background-color: var(--brand-default-fg);
}


@media (max-width: 850px) {
	.kiwi-channellist-table-topic {
		display:none;
	}
	
	.kiwi-startup-common-section-info-content {
		padding:0;
		margin:0;
		height:auto;
		position:relative;
	}
	
	.netlogo span {
		padding:0;
		box-sizing:border-box;
		display:inline-block;
		height:auto;
		width:0!important;
		vertical-align:middle;
	}
	
	.kiwi-startup-common-section-info {
		position:absolute;
		bottom:0;
		right:0;
		left:0;
		height:50px!important;
		padding:0;
	}
	
	.kiwi-startup-common-section-info-content .netlogo {
		display:none;
		padding:0;
	}
	
	.kiwi-startup-common-section-info-content div {
		width:100%;
		max-width:100%;
		padding:0;
	}
	
	.u-cpanel {
		width:100%;
		max-width:100%;
		font-size:.65em!important;
		line-height:50px;
	}
	
	.kiwi-welcome-simple-form {
		margin-bottom:52px;
	}
}
</style>

<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "transparent") {
}
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "nightswatch") {
}
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "html5color") {?>

<style>
:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#22231f<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #000;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#22231f<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#22231f<?php }?>;
}

</style>
<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "transparent") {?>

<style>
:root{
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['html5color'] == '') {?>#0099cc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
}?>;
    --brand-primary-hover: #ff3300;
    --brand-midtone: #2b2b2b;
    --brand-darktone: #969696;
    --brand-default-bg: transparent;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#bdbdbd<?php }?>;
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #712c2f;
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);
    --comp-header-bg: transparent;
    --comp-header-name-fg: var(--brand-default-fg);
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#f1f1f1<?php }?>;
    --comp-header-option-active-bg: var(--brand-primary);
    --comp-statebrowser-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#ababab<?php }?>;
    --comp-statebrowser-bg: transparent;
    --comp-statebrowser-bg-networkname: #454545;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#ababab<?php }?>;
    --comp-usermenu-open-bg: #0e0e0e;
    --comp-statebrowser-network-border: #656565;
    --comp-sidebar-bg: transparent;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['omswitch'] == "true") {?>#000<?php } else { ?>#ababab<?php }?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);
    --brand-link-normal: var(--brand-primary);
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #484848;
}

.kiwi-wrap {
<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {?>
    background-color:<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "html5color") {
echo $_smarty_tpl->tpl_vars['metadata']->value['html5color'];
} else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}?>;	
}
<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {?>
	<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "transparent") {?>
	<?php } else { ?>
	background-image:url("<?php echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];?>
");
	<?php }
} else { ?>
	background-image:url("https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg");
<?php }?>
	background-repeat: no-repeat;
	background-size: 100% 100%; 
}
<?php }?>
</style>
<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "blue") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "orange") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "darkorange") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "green") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "lightblue") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "skyblue") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "yellow") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "pink") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "darkred") {?>
<style>

:root {
    /* Primary Variables */
    --brand-primary: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --brand-primary-hover: #990033;
    --brand-midtone: #f1f1f1;
    --brand-darktone: #969696;
    --brand-default-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#fff<?php }?>;
    --brand-default-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>#22231f<?php }?>;

    /* Warning colors */
    --brand-notice: #f6c358;
    --brand-warning: #fcb46e;
    --brand-error: #bf5155;

    /* Connection Indicator top */
    --comp-workspace-before-bg: var(--brand-primary);
    --comp-bg-kiwi-workspace--disconnected-after-bg: var(--brand-error);

    /* Container Header */
    --comp-header-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#737373<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-name-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-fg)<?php }?>;
    --comp-header-option-active-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-default-bg)<?php }?>;
    --comp-header-option-active-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;

    /* StateBrowser */
    --comp-statebrowser-fg: #fff;
    --comp-statebrowser-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] != "transparent") {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
} else { ?>#001a33<?php }?>;
    --comp-statebrowser-bg-networkname: #006699;
    --comp-statebrowser-channel-active-bg: #ffffff0d;
    --comp-statebrowser-channel-active-fg: #fff;
    --comp-usermenu-open-bg: #161d25;
    --comp-statebrowser-network-border: #656565;


    /* Sidebars ( Right Side ) */
    --comp-sidebar-bg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#cccccc<?php } else {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgcolor'];
}
}?>;
    --comp-sidebar-fg: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else {
if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == 'transparent') {?>#000<?php } else { ?>#FFF<?php }
}?>;
    --comp-aboutbuffer-bg: rgba(0, 0, 0, 0.03);
    --comp-aboutbuffer-header-bg: var(--brand-primary);

    /* Misc */
    --brand-link-normal: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-primary)<?php }?>;
    --brand-link--hover: var(--brand-primary-hover);
    --brand-shadow: rgba(0, 0, 0, 0.1);
    --comp-border: #b2b2b2;
}

/* StateBrowser */
.kiwi-statebrowser-usermenu--open {
    background-color: #5d919c;
}
.kiwi-statebrowser-appsettings, .kiwi-statebrowser-usermenu {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>#22231f<?php }?>;
}
..kiwi-statebrowser-appsettings {
    font-size: 1.4em;
}
.kiwi-statebrowser-network-status .u-link {
    color: #fff;
}
.kiwi-network-name-options {
    background-color: #7dc8d9;
}
.kiwi-statebrowser-network .kiwi-statebrowser-network-header {
    background-color: #428bca;
    margin: 0 10px 0 0;
    border-radius: 0 4px 0 0;
}
.kiwi-statebrowser-channels-options {
    background-color: #69a8de;
    margin: 0 10px 4px 0;
    border-radius: 0 0 4px 0;
}
.kiwi-statebrowser-newchannel-inputwrap, .kiwi-statebrowser-channelfilter, .kiwi-statebrowser-network-status {
    margin: 0 10px 0 0;
}
.kiwi-statebrowser-newchannel-inputwrap input[type='text'], .kiwi-statebrowser-channelfilter input[type='text'] {
    background-color: #fff;
    color: #777;
    border: 3px solid #69a8de;
}
.kiwi-statebrowser-channelfilter a {
    color: #fff;
}
.kiwi-statebrowser-network-status {
    background-color: #bf5155;
}
.kiwi-statebrowser-network-status.u-link {
    color: #5bc0de;
}
.kiwi-statebrowser-channel-leave {
    background: transparent;
}
.kiwi-statebrowser-channel-leave:hover {
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel, .kiwi-statebrowser-channel-active {
    margin: 0 10px 4px 0;
    border-radius: 0 4px 4px 0;
}
.kiwi-statebrowser-channel {
    background-color: #428bca;
}
.kiwi-statebrowser-channel:hover {
    background-color: #3071a9;
    text-decoration: none;
}
.kiwi-statebrowser-channel-active {
    background: #5bc0de;
}
.kiwi-statebrowser-channel .kiwi-statebrowser-channel-name {
    font-weight: 500;
}
.u-tabbed-content {
    color: var(--brand-default-fg);
	background-color: var(--brand-default-bg);
}
.u-link {
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#fff<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.u-tabbed-view-tabs .u-tabbed-view-tab {
    color: var(--brand-default-fg);	
}
.kiwi-welcome-simple-form .u-submit {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#FFF<?php } else { ?>var(--brand-primary)<?php }?>;
    color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-bg)<?php }?>;
}
.kiwi-welcome-simple-form {
	background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>#FFF<?php }?>;
}
.kiwi-startup-common-section-connection {
    background-color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-primary)<?php }?>;
}
.kiwi-welcome-asl-form {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}
.kiwi-welcome-asl-have-password {
	color: <?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "black") {?>#000<?php } else { ?>var(--brand-default-fg)<?php }?>;
}



</style>

<?php }?>

<?php }
}
