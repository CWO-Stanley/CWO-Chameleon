<!DOCTYPE html><html><head>
{literal}
<script name="kiwiconfig">
window.kiwiConfig = function kiwiConfig() {
        return {
		"startupScreen": "{/literal}{if $metadata['kiwi_asl'] == 'true'}plugin-asl{else}welcome{/if}{literal}",
		"windowTitle": ".::. Chattersworld Chameleon .::. #{/literal}{$metadata['name']}{literal}",
		"kiwiServer": "https://{/literal}{$gateway}{literal}/webirc/kiwiirc/",
		"theme": "CWO",
		"hide_advanced": true,
		"disconnectOnSaslFail": false,
		"hideSettings": false,
		"nicklistGroupAway": true,
		"noticeActiveBuffer": true,
		"warnOnExit": {/literal}{if $metadata['warnonexit'] == "true"}true{else}false{/if}{literal},
		"showAd": {/literal}{if $metadata['ads_enabled'] == "true"}true{else}false{/if}{literal},
		"themes": [
				{/literal}
				{if $metadata['style'] == "nightswatch"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/theme-dark-fluid2" }
				{/literal}{elseif $metadata['style'] == "transparent"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/transparent7" }
				{/literal}{elseif $metadata['style'] == "coffee"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/coffee" }
				{/literal}{elseif $metadata['style'] == "dark"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/dark" }
				{/literal}{elseif $metadata['style'] == "default"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/default" }
				{/literal}{elseif $metadata['style'] == "elite"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/elite2" }
				{/literal}{elseif $metadata['style'] == "grayfox"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/grayfox" }
				{/literal}{elseif $metadata['style'] == "osprey"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/osprey" }
				{/literal}{elseif $metadata['style'] == "radioactive"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/radioactive" }
				{/literal}{elseif $metadata['style'] == "sky"}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/sky" }
				{/literal}{else}{literal}
				{ "name": "CWO", "url": "{/literal}{$fullurl}{literal}/static/themes/cwo-chameleon-kiwiirc5" }
				{/literal}{/if}{literal}
				],
		"showColorPicker": true,
		"startupOptions": { 
				"server": "{/literal}{$irc}{literal}", 
				"infoBackground": "{/literal}{if $metadata['bgurl'] != ''}{$metadata['bgurl']}{else}https://chattersworld.nl/wp-content/uploads/2021/10/WebsiteBackground2.jpg{/if}{literal}", 
				"infoContent": "<a class=\"netlogo\" href=\"{/literal}{$fullurl}{literal}\"><span></span><img src=\"{/literal}{$logo}{literal}\"></a><div><a href=\"{/literal}{$fullurl}{literal}/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"{/literal}{$fullurl}{literal}/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.chattersworld.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
				"greetingText": "<div style='margin:0px 0px 0px 0px'><center><a class=\"netlogo\" href=\"{/literal}{$fullurl}{literal}\"><span></span><img src=\"{/literal}{$logo}{literal}\" height='60px'></a></center></div>",
				"state_key": "CWO-Chameleon-190",
				"buttonText": "<center><i class='fa fa-sign-in' style='margin-right:5px !important;'></i> Chatten</center>",
				"gecos": "CWO HTML5 Webchat Chameleon ID: {/literal}{$smarty.get.id}{literal}",
				"port": 6697, 
				"tls": true, 
				"direct": false, 
				"showChannel": false,
				"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
				"channel": "#{/literal}{$metadata['name']}{literal}",
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
				{/literal}{if $metadata['private'] == "false"}{literal}"block_pms": true, {/literal}{/if}{literal}
				"coloured_nicklist": false,
				{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}"nicklist_avatars": true, {/literal}{else}{literal}"nicklist_avatars": false,{/literal}{/if}{literal}
				{/literal}{if $metadata['hostnames'] == "true"}{literal}"show_hostnames": true, {/literal}{else}{literal}"show_hostnames": false,{/literal}{/if}{literal}
				"colour_nicknames_in_messages": false,
				"scrollback_size": "100",
				"inline_link_auto_previews": {/literal}{if $metadata['embedly'] == "true"}true{else}false{/if}{literal},
				"inline_link_auto_preview_whitelist": ".*",
				"messageLayout": "{/literal}{if $metadata['kiwi_avatar'] == "true"}modern{else}inline{/if}{literal}",
				"default_kick_reason": "Gedraag je!",
				"default_ban_mask": "*!*@%h",
				"show_presence_changes": true,
				"show_timestamps": {/literal}{if $metadata['time'] == "true"}true{else}false{/if}{literal},
				"share_typing": true
			},
		"plugins": [
			{/literal}{if $metadata['webcam'] == "true"}{literal}
			{
				"name": "conference",
				"url": "{/literal}{$fullurl}{literal}/static/plugins/conference/plugin-conference.min.js?v=1.4"
			},{/literal}{/if}{literal}
				{/literal}{if $metadata['style'] == "nightswatch"}{literal}
				{"name": "theme-dark-fluid", "url": "{/literal}{$fullurl}{literal}/static/plugins/theme-dark-fluid.js"},
				{/literal}{/if}{literal}
				{"name": "emoji", "url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-emoji.min.js?v=2.1"},
				{/literal}{if $metadata['private'] == "true"}{literal}
				{"name": "simosnapcss","url": "{/literal}{$fullurl}{literal}/static/plugins/block-queries.html"},
				{/literal}{/if}{literal}
				{"name": "simosnapcss","url": "{/literal}{$fullurl}{literal}/static/plugins/cwo-css3.html"},
				{/literal}{if $metadata['private'] == "false"}{literal}
				{"name": "perform","url": "{/literal}{$fullurl}{literal}/static/plugins/perform.js?v=9"},
				{/literal}{/if}{literal}
				{/literal}{if $metadata['radio'] == "true" && $metadata['radio_player'] == "internal"}{literal}
				{"name": "plugin-radio","url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-radio.html"},
				{/literal}{/if}{literal}
				{"name": "nickserv", "url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-nickserv.js"},
				{"name": "analitics", "url": "{/literal}{$fullurl}{literal}/static/plugins/analitics.html?v=1.4"},
				{"name": "analitics", "url": "{/literal}{$fullurl}{literal}/static/plugins/invite_alert.js?v=2.0"},
				{"name": "sidebar_centered", "url": "{/literal}{$fullurl}{literal}/static/plugins/sidebar_centered.html"},
				{/literal}{if $metadata['tags'] == "true"}{literal}
				{ "name": "services", "url": "{/literal}{$fullurl}{literal}/static/plugins/services.html?v=1.2" },
				{/literal}{/if}{literal}
				{ "name": "font", "url": "{/literal}{$fullurl}{literal}/static/plugins/font-size.html" },
				{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}
				{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"},
				
				{ "name": "irccloud", "url": "{/literal}{$fullurl}{literal}/static/plugins/irccloud.html" },
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_giphy'] == "true"}{literal}
				{"name": "giphy", "url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-giphy.html"},
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_imgur'] == "true"}{literal}
				{"name": "imgurl", "url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-imgur.html"},
				{/literal}{/if}{literal}
				{"name": "ident", "url": "{/literal}{$fullurl}{literal}/static/plugins/ident.js?v=1.5"},
				{/literal}{if $metadata['kiwi_upload'] == "true"}{literal}
				{"name": "fileuploader", "url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-fileuploader.js?v=2.5"}{/literal}{if $metadata['kiwi_asl'] == 'true'},{/if}{literal}
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_asl'] == 'true'}{literal}
				{"name": "asl","url": "{/literal}{$fullurl}{literal}/static/plugins/plugin-asl.js?cb=11"}
				{/literal}{/if}{literal}
		],
		{/literal}{if $metadata['kiwi_asl'] == 'true'}{literal}
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
					"localesPath": "{/literal}{$fullurl}{literal}/static/plugins/plugin-asl/locales",
					"reportChannel": "#abuse",
					"browseAllUsers": true
		},
		{/literal}{/if}{literal}
		{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}
		"plugin-gravatar": {
					"gatewayURL": "//{/literal}{$gateway}{literal}/",
					"gravatarURL": "//www.gravatar.com/avatar/",
					"gravatarRating": "g",
					"gravatarFallback": "wavatar"
		},
		{/literal}{/if}{literal}
		{/literal}{if $metadata['webcam'] == "true"}{literal}
		"plugin-conference":{ 
				"server": "meet.chattersworld.nl",
				"secure": true,
				"queries": true,
				"channels": true,
				"viewHeight": "{/literal}{$metadata['viewheight']}{literal}",
				"enabledInChannels": [ "*" ],
				"joinText": "{{ nick }} heeft de mediaconferentie opgestart!",
				"inviteText": "is inviting you to a private call.",
				"joinButtonText": "Join nu!",
				"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
				"linkShortenerAPIToken":"",
				"showLink": {/literal}{if $metadata['conflink'] == "true"}true{else}false{/if}{literal},
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
								{/literal}{if $metadata['mic'] == "true"}{else}"microphone",{/if}{literal} "camera", "fullscreen", "fodeviceselection", "hangup",
								"settings", "videoquality", "filmstrip",
								"stats", "tileview", "shortcuts", "mute-everyone"
					]
				},
				"configOverwrite": {
					"startWithVideoMuted": false,
					"startWithAudioMuted": true
				}
		},
		{/literal}{/if}{literal}
		"plugin-radio": {
				"url": "{/literal}{$fullurl}{literal}/stations.php?id={/literal}{$smarty.get.id}{literal}"
		},
		{/literal}{if $metadata['kiwi_upload'] == "true"}{literal}
		"fileuploader": {
			"server": "{/literal}{$file}{literal}",
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
		emojiLocation: '{/literal}{$fullurl}{literal}/emoticons/kiwi/',
		{/literal}{/if}{literal}
		"embedly": {
			"enable": {/literal}{if $metadata['embedly'] == "true"}true{else}false{/if}{literal},
			"key": ""
			}
	}
}
</script>
{/literal}