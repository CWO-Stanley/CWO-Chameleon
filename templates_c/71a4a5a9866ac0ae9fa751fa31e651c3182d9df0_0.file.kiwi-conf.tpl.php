<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-08 13:43:47
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-conf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_610fc37301ca31_68734547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71a4a5a9866ac0ae9fa751fa31e651c3182d9df0' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/kiwi-conf.tpl',
      1 => 1628423001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610fc37301ca31_68734547 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html><html><head>

<?php echo '<script'; ?>
 name="kiwiconfig">
window.kiwiConfig = function kiwiConfig() {
        return {
		"startupScreen": "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_asl'] == 'true') {?>plugin-asl<?php } else { ?>welcome<?php }?>",
		"windowTitle": ".::. Chattersworld Chameleon .::. #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
",
		"kiwiServer": "https://<?php echo $_smarty_tpl->tpl_vars['gateway']->value;?>
/webirc/kiwiirc/",
		"theme": "CWO",
		"hide_advanced": true,
		"disconnectOnSaslFail": false,
		"hideSettings": false,
		"nicklistGroupAway": true,
		"noticeActiveBuffer": true,
		"warnOnExit": <?php if ($_smarty_tpl->tpl_vars['metadata']->value['warnonexit'] == "true") {?>true<?php } else { ?>false<?php }?>,
		"showAd": <?php if ($_smarty_tpl->tpl_vars['metadata']->value['ads_enabled'] == "true") {?>true<?php } else { ?>false<?php }?>,
		"themes": [
				
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "nightswatch") {?>
				{ "name": "CWO", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/themes/theme-dark-fluid" }
				<?php } elseif ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "transparent") {?>
				{ "name": "CWO", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/themes/transparent2" }
				<?php } else { ?>
				{ "name": "CWO", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/themes/cwo-chameleon-kiwiirc4" }
				<?php }?>
				],
		"showColorPicker": true,
		"startupOptions": { 
				"server": "<?php echo $_smarty_tpl->tpl_vars['irc']->value;?>
", 
				"infoBackground": "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['bgurl'] != '') {
echo $_smarty_tpl->tpl_vars['metadata']->value['bgurl'];
} else { ?>https://chattersworld.nl/wp-content/uploads/2019/12/CWO-Webbanner.jpg<?php }?>", 
				"infoContent": "<a class=\"netlogo\" href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
\"><span></span><img src=\"<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
\"></a><div><a href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.chattersworld.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
				"greetingText": "<div style='margin:0px 0px 0px 0px'><center><a class=\"netlogo\" href=\"<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
\"><span></span><img src=\"<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
\" height='60px'></a></center></div>",
				"state_key": "CWO-Chameleon-160",
				"buttonText": "<center><i class='fa fa-sign-in' style='margin-right:5px !important;'></i> Chatten</center>",
				"gecos": "..::<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 HTML5 Webchat::..",
				"port": 6697, 
				"tls": true, 
				"direct": false, 
				"showChannel": false,
				"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
				"channel": "#<?php echo $_smarty_tpl->tpl_vars['metadata']->value['name'];?>
",
				"age": "",
				"sex": "",
				"location": "",
				"remember_buffers": false, 
				"nick": "" 
			},
		"sidebarDefault": "nicklist",
		"quitMessage": 'Pagina afgesloten! Tot Ziens!',
		"showChanlistModes": true,
		"buffers": {
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['private'] == "false") {?>"block_pms": true, <?php }?>
				"coloured_nicklist": false,
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>"nicklist_avatars": true, <?php } else { ?>"nicklist_avatars": false,<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['hostnames'] == "true") {?>"show_hostnames": true, <?php } else { ?>"show_hostnames": false,<?php }?>
				"colour_nicknames_in_messages": false,
				"scrollback_size": "100",
				"inline_link_auto_previews": <?php if ($_smarty_tpl->tpl_vars['metadata']->value['embedly'] == "true") {?>true<?php } else { ?>false<?php }?>,
				"inline_link_auto_preview_whitelist": ".*",
				"messageLayout": "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>modern<?php } else { ?>inline<?php }?>",
				"default_kick_reason": "Gedraag je!",
				"default_ban_mask": "*!*@%h",
				"show_presence_changes": true,
				"show_timestamps": <?php if ($_smarty_tpl->tpl_vars['metadata']->value['time'] == "true") {?>true<?php } else { ?>false<?php }?>,
				"share_typing": true
			},
		"plugins": [
			<?php if ($_smarty_tpl->tpl_vars['metadata']->value['webcam'] == "true") {?>
			{
				"name": "conference",
				"url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/conference/plugin-conference.min.js?v=1.4"
			},<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['style'] == "nightswatch") {?>
				{"name": "theme-dark-fluid", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/theme-dark-fluid.js"},
				<?php }?>
				{"name": "emoji", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-emoji.min.js?v=2.1"},
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['private'] == "true") {?>
				{"name": "simosnapcss","url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/block-queries.html"},
				<?php }?>
				{"name": "simosnapcss","url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/cwo-css3.html"},
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['private'] == "false") {?>
				{"name": "perform","url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/perform.js?v=9"},
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio'] == "true" && $_smarty_tpl->tpl_vars['metadata']->value['radio_player'] == "internal") {?>
				{"name": "plugin-radio","url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-radio.html"},
				<?php }?>
				{"name": "nickserv", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-nickserv.js"},
				{"name": "analitics", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/analitics.html?v=1.4"},
				{"name": "sidebar_centered", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/sidebar_centered.html"},
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['tags'] == "true") {?>
				{ "name": "services", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/services.html?v=1.2" },
				<?php }?>
				{ "name": "font", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/font-size.html" },
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>
				{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"},
				
				{ "name": "irccloud", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/irccloud.html" },
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_giphy'] == "true") {?>
				{"name": "giphy", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-giphy.html"},
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_imgur'] == "true") {?>
				{"name": "imgurl", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-imgur.html"},
				<?php }?>
				{"name": "ident", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/ident.js?v=1.5"},
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_upload'] == "true") {?>
				{"name": "fileuploader", "url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-fileuploader.js?v=2.1"}<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_asl'] == 'true') {?>,<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_asl'] == 'true') {?>
				{"name": "asl","url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-asl.js?cb=66"}
				<?php }?>
		],
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_asl'] == 'true') {?>
		"plugin-asl" : {
					"gecosType": 1,
					"showRealname": false,
					"showUserBrowser": true,
					"userBrowserIcon": "fa-list",
					"fallbackColour": "default",
					"singleLineUserbox": false,
					"singleLineString": {
						"age": "%a",
						"sex": "%s",
						"location": "%l",
						"separator": " "
					},
					"ageRanges": [
						{ "name": "_all", "value": "all" },
						{ "name": "< 25", "value": "<25" },
						{ "name": "25 - 45", "value": "25-46" },
						{ "name": "> 45", "value": ">45" }
					],
					"sexes": {
						"_male": { "chars": "M", "colour": "#00F" },
						"_female": { "chars": "F", "colour": "#F0F" },
						"_other": { "chars": "O", "colour": "#bdbdbd" }
					},
					"queryKeys": {
						"age": "age",
						"sex": "sex",
						"location": "location",
						"realname": "realname"
					},
					"localesPath": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/static/plugins/plugin-asl/locales",
					"reportChannel": "#abuse",
					"browseAllUsers": true
		},
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_avatar'] == "true") {?>
		"plugin-gravatar": {
					"gatewayURL": "//<?php echo $_smarty_tpl->tpl_vars['gateway']->value;?>
/",
					"gravatarURL": "//www.gravatar.com/avatar/",
					"gravatarRating": "g",
					"gravatarFallback": "wavatar"
		},
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['webcam'] == "true") {?>
		"plugin-conference":{ 
				"server": "meet.chattersworld.nl",
				"secure": true,
				"queries": true,
				"channels": true,
				"viewHeight": "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['viewheight'];?>
",
				"enabledInChannels": [ "*" ],
				"joinText": "{{ nick }} heeft de mediaconferentie opgestart!",
				"inviteText": "is inviting you to a private call.",
				"joinButtonText": "Join nu!",
				"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
				"linkShortenerAPIToken":"",
				"showLink": <?php if ($_smarty_tpl->tpl_vars['metadata']->value['conflink'] == "true") {?>true<?php } else { ?>false<?php }?>,
				"useLinkShortener": false,
				"linkShortenerURL": "https://x0.no/api/?{{ link }}",
				"interfaceConfigOverwrite": {
					"SHOW_JITSI_WATERMARK": true,
					"SHOW_WATERMARK_FOR_GUESTS": true,
					"SHOW_BRAND_WATERMARK": true,
					"BRAND_WATERMARK_LINK": "https://chattersworld.nl/",
					"JITSI_WATERMARK_LINK": "https://chattersworld.nl",
					"MOBILE_APP_PROMO": true,
					"DEFAULT_REMOTE_DISPLAY_NAME": "",
					"VERTICAL_FILMSTRIP": false,
					"LANG_DETECTION": true,
					"TOOLBAR_BUTTONS": [
								<?php if ($_smarty_tpl->tpl_vars['metadata']->value['mic'] == "true") {
} else { ?>"microphone",<?php }?> "camera", "fullscreen", "fodeviceselection", "hangup",
								"settings", "videoquality", "filmstrip",
								"stats", "tileview", "shortcuts", "mute-everyone"
					]
				},
				"configOverwrite": {
					"startWithVideoMuted": false,
					"startWithAudioMuted": true
				}
		},
		<?php }?>
		"plugin-radio": {
				"url": "<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/stations.php?id=<?php echo $_GET['id'];?>
"
		},
		<?php if ($_smarty_tpl->tpl_vars['metadata']->value['kiwi_upload'] == "true") {?>
		"fileuploader": {
			"server": "<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
",
			"maxFileSize": 10485760,
			"note": "Let op, deze bestanden blijven maximaal 24 uur bestaan!",
			"webpreview": {
				"enable": false,
				"url": "https://files.chattersworld.nl/embed?url={url}&center={center}&width={width}&height={height}"
			}
		},
		emojis: {
            '-___-': '1f611.png',
            ':\'-)': '1f602.png',
            '\':-)': '1f605.png',
            '\':-D': '1f605.png',
            '>:-)': '1f606.png',
            '\':-(': '1f613.png',
            '>:-(': '1f620.png',
            ':\'-(': '1f622.png',
            'O:-)': '1f607.png',
            '0:-3': '1f607.png',
            '0:-)': '1f607.png',
            '0;^)': '1f607.png',
            'O;-)': '1f607.png',
            '0;-)': '1f607.png',
            'O:-3': '1f607.png',
            '-__-': '1f611.png',
            ':-Þ': '1f61b.png',
            '<3': '2764.png',
            '</3': '1f494.png',
            ':\')': '1f602.png',
            ':-D': '1f603.png',
            '\':)': '1f605.png',
            '\'=)': '1f605.png',
            '\':D': '1f605.png',
            '\'=D': '1f605.png',
            '>:)': '1f606.png',
            '>;)': '1f606.png',
            '>=)': '1f606.png',
            'XD': '1f606.png',
            ';-)': '1f609.png',
            '*-)': '1f609.png',
            ';-]': '1f609.png',
            ';^)': '1f609.png',
            '\':(': '1f613.png',
            '\'=(': '1f613.png',
            ':-*': '1f618.png',
            ':^*': '1f618.png',
            '>:P': '1f61c.png',
            'X-P': '1f61c.png',
            '>:[': '1f61e.png',
            ':-(': '1f61e.png',
            ':-[': '1f61e.png',
            '>:(': '1f620.png',
            ':\'(': '1f622.png',
            ';-(': '1f622.png',
            '>.<': '1f623.png',
            '#-)': '1f635.png',
            '%-)': '1f635.png',
            'X-)': '1f635.png',
            '\\0/': '1f646.png',
            '\\O/': '1f646.png',
            '0:3': '1f607.png',
            '0:)': '1f607.png',
            'O:)': '1f607.png',
            'O=)': '1f607.png',
            'O:3': '1f607.png',
            'B-)': '1f60e.png',
            '8-)': '1f60e.png',
            'B-D': '1f60e.png',
            '8-D': '1f60e.png',
            '-_-': '1f611.png',
            '>:\\': '1f615.png',
            '>:/': '1f615.png',
            ':-/': '1f615.png',
            ':-.': '1f615.png',
            ':-P': '1f61b.png',
            ':Þ': '1f61b.png',
            ':-b': '1f61b.png',
            ':-O': '1f62e.png',
            'O_O': '1f62e.png',
            '>:O': '1f62e.png',
            ':-X': '1f636.png',
            ':-#': '1f636.png',
            ':-)': '1f642.png',
            '(y)': '1f44d.png',
            ':D': '1f603.png',
            '=D': '1f603.png',
            ';)': '1f609.png',
            '*)': '1f609.png',
            ';]': '1f609.png',
            ';D': '1f609.png',
            ':*': '1f618.png',
            '=*': '1f618.png',
            ':(': '1f61e.png',
            ':[': '1f61e.png',
            '=(': '1f61e.png',
            ':@': '1f620.png',
            ';(': '1f622.png',
            'D:': '1f628.png',
            ':$': '1f633.png',
            '=$': '1f633.png',
            '#)': '1f635.png',
            '%)': '1f635.png',
            'X)': '1f635.png',
            'B)': '1f60e.png',
            '8)': '1f60e.png',
            ':/': '1f615.png',
            ':\\': '1f615.png',
            '=/': '1f615.png',
            '=\\': '1f615.png',
            ':L': '1f615.png',
            '=L': '1f615.png',
            ':P': '1f61b.png',
            ':p': '1f61b.png',
            '=P': '1f61b.png',
            ':b': '1f61b.png',
            ':O': '1f62e.png',
            ':X': '1f636.png',
            ':#': '1f636.png',
            '=X': '1f636.png',
            '=#': '1f636.png',
            ':)': '1f642.png',
            '=]': '1f642.png',
            '=)': '1f642.png',
            ':]': '1f642.png',
			'(chameleon)': 'cwo-chameleon2.png',
        },
		emojiLocation: '<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/emoticons/kiwi/',
		<?php }?>
		"embedly": {
			"enable": <?php if ($_smarty_tpl->tpl_vars['metadata']->value['embedly'] == "true") {?>true<?php } else { ?>false<?php }?>,
			"key": ""
			}
	}
}
<?php echo '</script'; ?>
>
<?php }
}
