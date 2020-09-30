<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link rel="shortcut icon" href="{$logo}" />
        <title>..::{$sitename}::..</title>

        <!-- Vendor styles -->
       <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	   <link rel="stylesheet" href="{$fullurl}/resources/vendors/zwicon/zwicon.min.css">
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
		{if isset($page)}
            {if $page=='new' || $page=='edit'}
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/select2/dist/css/select2.min.css"> 
        <link rel="stylesheet" href="{$fullurl}/vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
			{/if}
		{/if}
        <!--  -->

        <!-- App styles -->
        <link rel="stylesheet" href="{$fullurl}/css/app.min.css">
		<!-- <script src="{$fullurl}/js/bootstrap-switch.js"></script> -->
		     </head>


  <body data-sa-theme="4">
        <main class="main">
            <!-- <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div> -->

            <header class="header">
             <div class="navigation-trigger" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zwicon-hamburger-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="{$fullurl}/list">..::{$sitename}::..</a></h1>
                </div>
                 
				 <ul class="top-nav">
			<li {if $page == "list" || $page == "edit"}class="active"{/if}><a href="{$fullurl}/list">Je Chatboxen</a></li>
                    <li {if $page == "new"}class="active"{/if}><a href="{$fullurl}/new">Nieuwe Chatbox</a></li>
                    <li {if $page == "settings"}class="active"{/if}><a href="{$fullurl}/settings">Instellingen</a></li>
                    <li {if $page == "help"}class="active"{/if}><a href="{$fullurl}/help">Help</a></li>
					</ul>
					
                <ul class="top-nav">
                    <span class="text-muted">
                        {if isset($login)}
                            <strong>Ingelogd als: </strong>{if isset($god)}<img src='{$fullurl}/admin.png' alt='admin' /><font color='deeppink'><b>{/if} {$login} {if isset($god)}</b></font><img src='{$fullurl}/admin.png' alt='admin' />{/if} (<a href="{$fullurl}/logout">Log uit</a>)
                        {/if}
                    </span>
       
					
                </ul>
                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="hours"></span>
                        <span class="min"></span>
                        <span class="sec"></span>
                    </div>
                </div>
            </header>
			<aside class="sidebar sidebar--hidden">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="{if isset($god)}{$fullurl}/admin.png{else}{$fullurl}/demo/img/profile-pics/8.jpg{/if}" alt="">
                            <div>
                                <div class="user__name">{$login}</div>
                                <div class="user__email">{if isset($god)}Administrator{/if}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{$fullurl}/logout">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li {if $page == "list" || $page == "edit"}class="navigation__active"{else}class="@@indexactive"{/if}><a href="{$fullurl}/list"><i class="zwicon-home"></i> Home</a></li>

                        <li {if $page == "new"}class="navigation__active"{else}class="@@typeactive"{/if}><a href="{$fullurl}/new"><i class="zwicon-chat"></i> Nieuwe chatbox</a></li>

                        <li {if $page == "settings"}class="navigation__active"{else}class="@@widgetactive"{/if}><a href="{$fullurl}/settings"><i class="zwicon-cog"></i> Instellingen</a></li>

                        

                        <li {if $page == "help"}class="navigation__active"{else}class="@@calendaractive"{/if}><a href="{$fullurl}/help"><i class="zmdi zmdi-help"></i> Help</a></li>

                                                
                    </ul>
                </div>
            </aside>
			
		<section class="content content--full">
		 <br />
        {if isset($info)}
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ziezo!</strong> {$info}
            </div>
        {/if}
        
        {if isset($page)}
            {if $page=='new' || $page=='edit'}
                {include file='chat_new.tpl'}
            {elseif $page=='del'}
                {include file='chat_del.tpl'}
            {elseif $page=='transfer'}
                {include file='chat_transfer.tpl'}
            {elseif $page=='help'}
                {include file='chat_help.tpl'}
            {elseif $page=='settings'}
                {include file='chat_settings.tpl'}
            {else}
                {include file='chat_list.tpl'}
            {/if}
        
        {else}
            <div class="datacontainer">
                <h1>Chattersworld Chat Creator</h1>
                <p class="lead">Welkom! Hier kan je je eigen chatbox aanmaken en volledig naar je wensen aanpassen!</p>
            </div>
        {/if}
      
        

    
		</section>
	<center>
	<footer class="footer hidden-xs-down">
                    <p>© {$sitename} All rights reserved. v6.0</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="https://chattersworld.nl">Homepage</a>

                        <a class="nav-link" href="https://wiki.chattersworld.nl">Support</a>

                      
                    </ul>
                </footer></center></main>
				         <!-- Javascript -->
		
        <!-- Vendors -->
        <script src="{$fullurl}/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
		{if isset($page)}
            {if $page=='new' || $page=='edit'}
		<script src="{$fullurl}/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
			{else}
        <!-- Vendors: Data tables -->
        <script src="{$fullurl}/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="{$fullurl}/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
			{/if}
		{/if}
		{if isset($god)}
{literal}
<script>
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
</script>
{/literal}
{else}
{literal}
<script>
		$(document).ready(function() {
				$('#data-table2').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
					},
					"pageLength" : 25,
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Alles"]],
					
				} );
	
		} );
		</script>
{/literal}
{/if}					

        <script src="{$fullurl}/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <!-- App functions and actions -->
        <script src="{$fullurl}/js/app.min.js"></script>
		{if isset($success)}
		<script type="text/javascript">

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
                                    '<span data-notify="message">{$success}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
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
			</script>
			{/if}
			{if isset($error)}
			<script type="text/javascript">

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
                                    '<span data-notify="message">{$error}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
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
			</script>
			{/if}
  </body>
</html>
