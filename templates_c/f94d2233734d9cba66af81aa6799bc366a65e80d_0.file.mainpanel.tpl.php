<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-06 23:41:26
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/mainpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ce4863d3261_68610487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94d2233734d9cba66af81aa6799bc366a65e80d' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/mainpanel.tpl',
      1 => 1601971299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:chat_new.tpl' => 1,
    'file:chat_del.tpl' => 1,
    'file:chat_transfer.tpl' => 1,
    'file:chat_help.tpl' => 1,
    'file:chat_settings.tpl' => 1,
    'file:chat_list.tpl' => 1,
  ),
),false)) {
function content_5f7ce4863d3261_68610487 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
        <title>..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
::..</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/components.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/forms/selects/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/css/tables/datatable/datatables.min.css">

    
    
		</head>


  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
        <!-- new style -->
		<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"> </i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        
						
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "list" || $_smarty_tpl->tpl_vars['page']->value == "edit") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list">Je Chatboxen</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "new") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/new">Nieuwe Chatbox</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/settings">Instellingen</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value == "help") {?>class="active"<?php } else { ?>class="mega-dropdown nav-item d-none d-md-block"<?php }?>><a class="dropdown-toggle nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/help">Help</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav float-right">
                         
                        
                        <?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {?>
                            <strong>Ingelogd als: </strong><?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?><img src='<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/admin.png' alt='admin' /><font color='deeppink'><b><?php }?> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?></b></font><img src='<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/admin.png' alt='admin' /><?php }?> (<a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/logout">Log uit</a>)
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	
	<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/images/backgrounds/04.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row position-relative">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" />
                        <h3 class="brand-text">Chameleon</h3>
                    </a></li>
                <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "list" || $_smarty_tpl->tpl_vars['page']->value == "edit") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/list"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
				<li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "new") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/new"><i class="ft-message-circle"></i><span class="menu-title" data-i18n="">Nieuwe chatbox</span></a>
                </li>
				<li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/settings"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Instellingen</span></a>
                </li>
				<li class=" nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value == "help") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/help"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Help</span></a>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
		<!-- end new style -->
		
		<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    
		 <br />
        <?php if ((isset($_smarty_tpl->tpl_vars['info']->value))) {?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ziezo!</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

            </div>
        <?php }?>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'new' || $_smarty_tpl->tpl_vars['page']->value == 'edit') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'del') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_del.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'transfer') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_transfer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'help') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'settings') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:chat_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        
        <?php } else { ?>
            <div class="datacontainer">
                <h1>Chattersworld Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        <?php }?>
      
        

    
				</section>
			</div>
		</div>
	</div>
	<footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">© <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 All rights reserved. v6.0</span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://chattersworld.nl" target="_blank"> Homepage</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://wiki.chattersworld.nl" target="_blank"> Wikipedia</a></li>
            </ul>
        </div>
    </footer>
				         <!-- new style -->
						<!-- BEGIN: Vendor JS-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/vendors.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/sweetalert2.all.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/core/app-menu.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/js/core/app.js" type="text/javascript"><?php echo '</script'; ?>
>

		<?php if ((isset($_smarty_tpl->tpl_vars['god']->value))) {?>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    $('#data-table2').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
        },
		"pageLength" : 25,
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Alles"]],
		"order": [[ 7, "desc" ]]
    } );
	
} );
<?php echo '</script'; ?>
>

<?php } else { ?>

<?php echo '<script'; ?>
>
		$(document).ready(function() {
				$('#data-table2').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
					},
					"pageLength" : 25,
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Alles"]],
					
				} );
	
		} );
		<?php echo '</script'; ?>
>

<?php }?>					

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/app-assets/vendors/js/extensions/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"><?php echo '</script'; ?>
>

        <!-- App functions and actions -->
        
		<?php if ((isset($_smarty_tpl->tpl_vars['success']->value))) {?>
		<?php echo '<script'; ?>
 type="text/javascript">

            /*--------------------------------------
                Bootstrap Notify Notifications
            ---------------------------------------*/
            function notify(from, align, icon, type, animIn, animOut){
                $.notify({
                    icon: icon,
                    title: 'Bootstrap Notify',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div data-notify="container" class="alert alert-dismissible alert-success alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">Ziezo!</span> ' +
                                    '<span data-notify="message"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="<?php echo 3;?>
" target="<?php echo 4;?>
" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                                '</div>'
                });
            }

            $('.notifications-demo > .btn').ready(function(){
                // e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');

                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });
			<?php echo '</script'; ?>
>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
			<?php echo '<script'; ?>
 type="text/javascript">

            /*--------------------------------------
                Bootstrap Notify Notifications
            ---------------------------------------*/
            function notify(from, align, icon, type, animIn, animOut){
                $.notify({
                    icon: icon,
                    title: 'Bootstrap Notify',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div data-notify="container" class="alert alert-dismissible alert-danger alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">Oeps!</span> ' +
                                    '<span data-notify="message"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="<?php echo 3;?>
" target="<?php echo 4;?>
" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                                '</div>'
                });
            }

            $('.notifications-demo > .btn').ready(function(){
                // e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');

                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });
			<?php echo '</script'; ?>
>
			<?php }?>
  </body>
</html>
<?php }
}
