/*
 * CLEVER - HTML5 Radio Player With History - Shoutcast and Icecast - v1.6.1
 * Copyright 2019-2020, LambertGroup
 *
 */

 (function(d){function C(a,b,p){d(".audio11_sound",p).css({"-webkit-animation-play-state":"paused","-moz-animation-play-state":"paused","-ms-animation-play-state":"paused","-o-animation-play-state":"paused","animation-play-state":"paused"});d(".audio11_sound2",p).css({"-webkit-animation-play-state":"paused","-moz-animation-play-state":"paused","-ms-animation-play-state":"paused","-o-animation-play-state":"paused","animation-play-state":"paused"})}function y(a){var b;a=a.split("");a.forEach(function(d,
 h){b="\u00c0\u00c1\u00c2\u00c3\u00c4\u00c5\u00e0\u00e1\u00e2\u00e3\u00e4\u00e5\u00df\u00d2\u00d3\u00d4\u00d5\u00d5\u00d6\u00d8\u00f2\u00f3\u00f4\u00f5\u00f6\u00f8\u00c8\u00c9\u00ca\u00cb\u00e8\u00e9\u00ea\u00eb\u00f0\u00c7\u00e7\u00d0\u00cc\u00cd\u00ce\u00cf\u00ec\u00ed\u00ee\u00ef\u00d9\u00da\u00db\u00dc\u00f9\u00fa\u00fb\u00fc\u00d1\u00f1\u0160\u0161\u0178\u00ff\u00fd\u017d\u017e\u2019".indexOf(d);-1!=b&&(a[h]="AAAAAAaaaaaaBOOOOOOOooooooEEEEeeeeeCcDIIIIiiiiUUUUuuuuNnSsYyyZz'"[b])});return a.join("").trim()}
 function I(a,b){b.preserveOriginalUpperLowerCase||(a=a.toLowerCase(),a=a.replace(/\b[a-z]/g,function(a){return a.toUpperCase()}),a=a.replace(/&Apos;/gi,"'"),a=a.replace(/&Amp;/gi,"&"),a=a.replace(/'[A-Z]/g,function(a){return a.toLowerCase()}));return a}function D(a,b,d){a=String(a);var h="";if(a.length>b){a=a.substring(0,b);var g=a.split(" ");a=a.substring(b-2,b-1);""!=a&&(g.pop(),h="...");a=g.join(" ")}a=I(a,d);return a+h}function A(a,b,p,h,g,l,u,m,f){l.empty();for(var c=new Date,e,t,k=t=0;k<b.title_arr.length;k++)if(a.useRadioServerTime||
 0!==k||(t=b.time_arr[k].split(":"),t=c.getHours()-t[0]),a.useRadioServerTime||(e=b.time_arr[k].split(":"),e[0]=parseInt(e[0],10)+t,24<parseInt(e[0],10)&&(e[0]=parseInt(e[0],10)-24),0>parseInt(e[0],10)&&(e[0]=24+parseInt(e[0],10)),9>=parseInt(e[0],10)&&(e[0]="0"+parseInt(e[0],10)),b.time_arr[k]=e.join(":")),b.thumbsHolder_Thumb=d('<div class="thumbsHolder_ThumbOFF" rel="'+k+'"><div class="padding"><span class="timex">'+String(b.time_arr[k]).substring(0,String(b.time_arr[k]).length-3)+'</span><div class="img_div" style="background-image:url('+
 b.image_arr[k]+');background-color:#000000;"></div><span class="titlex">'+D(b.title_arr[k],900,a)+'</span><span class="authorx">'+D(b.artist_arr[k],900,a)+"</span></div></div>"),l.append(b.thumbsHolder_Thumb),d(".titlex",b.thumbsHolder_Thumb).css({height:b.songTitleHeight+"px","font-size":(k===b.activeRecordId?b.songTitleFontSize+1:b.songTitleFontSize)+"px"}),d(".authorx",b.thumbsHolder_Thumb).css({height:b.songAuthorHeight+"px"}),b.thumbsHolder_Thumb.css({top:(b.thumbsHolder_ThumbHeight+1)*k+"px"}),
 k===b.activeRecordId&&b.thumbsHolder_Thumb.css({"margin-bottom":b.activeRecordMarginBottom+"px"}),d(".timex",b.thumbsHolder_Thumb).css({color:a.historyRecordTimeOffColor}),d(".titlex",b.thumbsHolder_Thumb).css({color:a.historyRecordSongOffColor,"border-bottom-color":a.songAuthorLineSeparatorOffColor}),d(".authorx",b.thumbsHolder_Thumb).css({color:a.historyRecordAuthorOffColor}),k===b.activeRecordId){e=a;var n=b,q=p,x=h,v=g,r=d('div[rel="'+n.activeRecordId+'"]',l);q.css({display:"block",top:e.historyTopPadding+
 (n.thumbsHolder_ThumbHeight+1)*n.activeRecordId+parseInt((n.thumbsHolder_ThumbHeight-n.playBtnHeight)/2,10)+"px",right:n.historyRightPadding+n.playButAddtionalRightMargin+"px","border-left-color":e.playButtonColor,"border-right-color":e.playButtonColor});v.css({display:n.barsCurDisplay,top:e.historyTopPadding+(n.thumbsHolder_ThumbHeight+1)*n.activeRecordId+parseInt((n.thumbsHolder_ThumbHeight-n.playBtnHeight)/2,10)+"px",left:n.playerWidth-n.historyRightPadding-80-165+"px"});x.css({display:"block",
 top:e.historyTopPadding+(n.thumbsHolder_ThumbHeight+1)*n.activeRecordId-13+"px",left:n.historyLeftPadding+51+"px"});d(".timex",r).css({color:e.historyRecordTimeOnColor});d(".titlex",r).css({color:e.historyRecordSongOnColor,"border-bottom-color":e.songAuthorLineSeparatorOnColor});d(".authorx",r).css({color:e.historyRecordAuthorOnColor});r.addClass("thumbsHolder_ThumbON");r.css({"background-color":e.historyRecordBackgroundOnColor})}u.height(a.historyTopPadding+a.historyBottomPadding+b.thumbsHolder_ThumbHeight*
 b.title_arr.length);m.height((b.thumbsHolder_ThumbHeight+1)*b.title_arr.length);f.css({"padding-top":a.historyTopPadding+"px","padding-bottom":a.historyBottomPadding+"px","padding-left":b.historyLeftPadding+"px","padding-right":b.historyRightPadding+"px"});l.width(b.playerWidth-b.historyLeftPadding-b.historyRightPadding)}function E(a,b,p,h,g,l,u,m){var f=p.noImageAvailable;g=p="";if(""!=a&&void 0!=a){p=a.match(/\.([^\./\?#]+)($|\?|#)/)[1];if("jpg"==p||"jpeg"==p||"JPG"==p||"JPEGs"==p)g="&iiurlparam=qlow-200px";
 d.get("https://commons.wikimedia.org/w/api.php?action=query&titles=Image:"+a+"&prop=imageinfo&format=xml&origin=*&iiprop=url"+g,{},function(a){""!=d("ii",a).attr("thumburl")&&void 0!=d("ii",a).attr("thumburl")?f=d("ii",a).attr("thumburl"):""!=d("ii",a).attr("url")&&void 0!=d("ii",a).attr("url")&&(f=d("ii",a).attr("url"));b.image_arr[m]=f;a=d('div[rel="'+m+'"]',h);d(".img_div",a).css({"background-image":"url('"+b.image_arr[m]+"')","background-color":"#000000"})})}}function F(a,b,p,h,g,l,u,m,f){var c;
 a.grabArtistPhoto&&(b.musicbrainzHistory_setTimeout_arr[f]=setTimeout(function(){var e=b.artist_arr[f].split("-");e[0]=e[0].trim();2<=e.length&&(e[0]=e[0].trim()+"-"+e[1].trim());b.the_artist_id_history_arr[f]="";b.the_wikidata_id_history_arr[f]="";c=a.noImageAvailable;b.wiki_photo_path=c;clearTimeout(b.musicbrainzHistory_setTimeout_arr[f]);e[0]=e[0].trim();d.get("https://musicbrainz.org/ws/2/artist/?query=artist:"+e[0],{},function(p){var k="",t,q="";b.the_artist_id_history_arr[f]="";var m=e[0];m=
 m.toLowerCase();m=y(m);d("artist",p).each(function(){t=d("name",this)[0];0<d("name",this).length&&""==b.the_artist_id_history_arr[f]&&(k=d(t).text(),k=k.toLowerCase(),k=y(k),m.toLowerCase()==k.toLowerCase()&&(b.the_artist_id_history_arr[f]=d(this).attr("id")))});""==b.the_artist_id_history_arr[f]&&"ROCK RADIO"!=e[0]&&(b.the_artist_id_history_arr[f]=d(d("artist",p)[0]).attr("id"));""!=b.the_artist_id_history_arr[f]&&void 0!=b.the_artist_id_history_arr[f]&&(b.musicbrainzHistory_setTimeout_arr[f]=setTimeout(function(){b.the_wikidata_id_history_arr[f]=
 "";d.get("https://musicbrainz.org/ws/2/artist/"+b.the_artist_id_history_arr[f]+"?inc=url-rels",{},function(e){d("relation",e).each(function(){"image"==d(this).attr("type")&&0<d("target",this).length&&(q=d("target",this).text(),q=q.substr(q.indexOf("File:",10)+5,q.length),E(q,b,a,h,g,l,u,f));"wikidata"==d(this).attr("type")&&0<d("target",this).length&&""==q&&(b.the_wikidata_id_history_arr[f]=d("target",this).text(),b.the_wikidata_id_history_arr[f]=b.the_wikidata_id_history_arr[f].substr(b.the_wikidata_id_history_arr[f].indexOf("/Q",
 10)+1,b.the_wikidata_id_history_arr[f].length),d.get("https://www.wikidata.org/w/api.php?action=wbgetclaims&entity="+b.the_wikidata_id_history_arr[f]+"&property=P18&format=xml&origin=*",{},function(c){q=d("datavalue",d("mainsnak",c)).attr("value");E(q,b,a,h,g,l,u,f)}))});if(""==q||void 0==q)b.image_arr[f]=c})},1100*(f+1)))})},1100*(f+1)))}function J(a,b,p,h,g,l,u,m,f,c){d.get(a.pathToAjaxFiles+"now_playing.php",{the_stream:a.radio_stream,_:d.now()},function(d){var e=d.split("-");void 0===e[0]&&(e[0]=
 "");void 0===e[1]&&(e[1]="");3<=e.length&&(e[0]=e[0]+"-"+e[1],e[1]=e[2]);d=e[1].trim();e=e[0].trim();var k=a.noImageAvailable;d!=b.title_arr[0]&&(b.title_arr.unshift(d),b.artist_arr.unshift(e),b.time_arr.unshift("now:0:0"),b.image_arr.unshift(k),b.time_arr[0]=G(a,b),b.title_arr.length>a.numberOfElementsDisplayed&&(b.title_arr.splice(-1,1),b.artist_arr.splice(-1,1),b.time_arr.splice(-1,1),b.image_arr.splice(-1,1)),A(a,b,m,f,c,h,g,l,u),F(a,b,p,h,g,l,u,m,0))})}function G(a,b){var d=new Date,h=d.getHours();
 d=d.getMinutes();if(1<b.time_arr.length){var g=b.time_arr[1].split(":");h=g[0];h=parseInt(h,10);g[1]>d&&(h++,24==h&&(h=0))}9>=h&&(h="0"+parseInt(h,10));9>=d&&(d="0"+parseInt(d,10));return h+":"+d+":00"}function K(){d("audio").each(function(){d(".AudioPlay").removeClass("AudioPause");d(this)[0].pause()});d(".audio11_sound").css({"-webkit-animation-play-state":"paused","-moz-animation-play-state":"paused","-ms-animation-play-state":"paused","-o-animation-play-state":"paused","animation-play-state":"paused"});
 d(".audio11_sound2").css({"-webkit-animation-play-state":"paused","-moz-animation-play-state":"paused","-ms-animation-play-state":"paused","-o-animation-play-state":"paused","animation-play-state":"paused"})}function H(){var a=-1;if("Microsoft Internet Explorer"==navigator.appName){var b=navigator.userAgent,d=/MSIE ([0-9]{1,}[.0-9]{0,})/;null!=d.exec(b)&&(a=parseFloat(RegExp.$1))}else"Netscape"==navigator.appName&&(b=navigator.userAgent,d=/Trident\/.*rv:([0-9]{1,}[.0-9]{0,})/,null!=d.exec(b)&&(a=
 parseFloat(RegExp.$1)));return parseInt(a,10)}function L(a){var b=!1;document.getElementById(a.audioID).canPlayType&&"no"!=document.getElementById(a.audioID).canPlayType("audio/mpeg")&&""!=document.getElementById(a.audioID).canPlayType("audio/mpeg")||(b=!0);return b}function M(a){-1!=a.indexOf("#")&&(a=a.substring(1));a=parseInt(a,16);return(a>>16&255)+","+(a>>8&255)+","+(a&255)}var v=navigator.userAgent.toLowerCase();d.fn.audio11_html5=function(a){a=d.extend({},d.fn.audio11_html5.defaults,a);H();
 return this.each(function(){var b=d(this),p=d('<div class="ximg_frame"></div>  <a class="AudioPlay" title="Play/Pause"></a>   <div class="thumbsHolderWrapper"><div class="historyPadding"><div class="thumbsHolderVisibleWrapper"><div class="thumbsHolder"></div></div></div></div>'),h=d('<div class="audio11_barsContainer"><div class="audio11_bars perspectiveDownZero"><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div><div class="audio11_bar audio11_sound2"></div></div><div class="audio11_bars"><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div><div class="audio11_bar audio11_sound"></div></div></div>'),
 g=b.parent(".audio11_html5");g.append(p);g.append(h);d(".audio11_bar",g).css({background:a.barsColor});var l=d(".AudioPlay",g),u=d(".ximg_frame",g);g.wrap("<div class='audio11_html5_the_wrapper'></div>");var m=g.parent();a.width100Proc&&(a.playerWidth=m.parent().width(),a.sticky&&(a.playerWidth=d(window).width()));m.width(a.playerWidth);m.css({"border-width":a.borderWidth+"px","border-color":a.borderColor,"background-color":"rgb("+M(a.bgColor)+","+a.bgColorOpacity+")"});a.sticky&&m.addClass("audio11_html5_sticky");
 a.centerPlayer&&m.css({margin:"0 auto"});var f=H();if(-1!=v.indexOf("ipad")||-1!=v.indexOf("iphone")||-1!=v.indexOf("ipod")||-1!=v.indexOf("webos")||-1!=navigator.userAgent.indexOf("Android"))a.autoPlay=!1;var c={playerWidth:a.playerWidth,title_arr:[],artist_arr:[],time_arr:[],image_arr:[],thumbsHolder_Thumb:d('<div class="thumbsHolder_ThumbOFF" rel="0"><div class="padding">test</div></div>'),thumbsHolder_ThumbHeight:80,thumbsHolder_Thumbs:"",positionElementsForActiveRecord_timeout:"",activeRecordId:0,
 activeRecordMarginBottom:15,barsCurDisplay:"block",historyRecordTitleLimit:a.historyRecordTitleLimit,historyRecordAuthorLimit:a.historyRecordAuthorLimit,titleLimitAddition:a.titleLimitAddition,authorLimitAddition:a.authorLimitAddition,playButAddtionalRightMargin:a.playButAddtionalRightMargin,playBtnHeight:56,historyLeftPadding:a.historyLeftPadding,historyRightPadding:a.historyRightPadding,songTitleFontSize:a.songTitleFontSize,songTitleHeight:a.songTitleHeight,songAuthorHeight:a.songAuthorHeight,isFlashNeeded:!0,
 myFlashObject:"",myregexp:/^(http|https):\/\/(.*):(.*)\/(.*)$/,http_or_https:"http",ip:"",port:"",mount_point:"",history_arr:["played.html"],radioReaderAjaxInterval:"",barsDisplayTimeout:0,the_artist_id:"",the_wikidata_id:"",musicbrainz_setTimeout:"",musicbrainzHistory_setTimeout_arr:[""],the_artist_id_history_arr:[""],the_wikidata_id_history_arr:[""],wiki_photo_path:""};c.audioID=b.attr("id");35>a.nowPlayingInterval&&(a.nowPlayingInterval=40);1>a.numberOfElementsDisplayed&&(a.numberOfElementsDisplayed=
 1);-1==(-1==navigator.userAgent.indexOf("Opera")&&navigator.userAgent.indexOf("OPR"))&&(-1!=navigator.userAgent.indexOf("Chrome")&&-1!=navigator.vendor.indexOf("Google")&&(a.autoPlay=!1),-1<navigator.userAgent.indexOf("Firefox")&&(a.autoPlay=!1),-1!=navigator.userAgent.indexOf("Safari")&&-1!=navigator.vendor.indexOf("Apple")&&-1==navigator.platform.indexOf("Win")&&(a.autoPlay=!1));0==a.autoPlay&&C(a,c,g);c.isFlashNeeded=L(c);-1!=f&&(c.isFlashNeeded=!0);c.isFlashNeeded=!1;-1==a.radio_stream.indexOf("/",
 9)&&(a.radio_stream+="/;");"/"==a.radio_stream.charAt(a.radio_stream.length-1)&&(a.radio_stream+=";");b=a.radio_stream.match(c.myregexp);null!=b&&(c.http_or_https=b[1],c.ip=b[2],c.port=b[3],c.mount_point=b[4],void 0!=c.mount_point&&";"==c.mount_point.trim()&&(c.mount_point=""));c.isFlashNeeded&&(c.rndNum=parseInt(998999*Math.random()+1E3),g.append("<div id='swfHolder"+c.rndNum+"'></div>"),swfobject.addDomLoadEvent(function(){c.myFlashObject=swfobject.createSWF({data:a.pathToAjaxFiles+"flash_player.swf",
 width:"0",height:"0"},{flashvars:"streamUrl="+a.radio_stream+"&autoPlay="+a.autoPlay+"&initialVolume=1"},"swfHolder"+c.rndNum)}),a.autoPlay&&l.addClass("AudioPause"));c.isFlashNeeded?""!=c.myFlashObject&&setTimeout(function(){c.myFlashObject.myAS3function(a.radio_stream,1)},1E3):(document.getElementById(c.audioID).src=a.radio_stream,document.getElementById(c.audioID).load(),a.autoPlay&&l.click());-1==v.indexOf("ipad")&&-1==v.indexOf("iphone")&&-1==v.indexOf("ipod")&&-1==v.indexOf("webos")||l.removeClass("AudioPause");
 var e=d(".thumbsHolderWrapper",g),t=d(".historyPadding",g),k=d(".thumbsHolderVisibleWrapper",g),n=d(".thumbsHolder",g),q,x,z,r,w;d.get(a.pathToAjaxFiles+"now_playing.php",{the_stream:a.radio_stream,_:d.now()},function(b){b=b.split("-");void 0===b[0]&&(b[0]="");void 0===b[1]&&(b[1]="");3<=b.length&&(b[0]=b[0]+"-"+b[1],b[1]=b[2]);c.title_arr.push(b[1].trim());c.artist_arr.push(b[0].trim());c.time_arr.push("now:0:0");c.image_arr.push(a.noImageAvailable);d.get(a.pathToAjaxFiles+"history.php",{the_stream:c.http_or_https+
 "://"+c.ip+":"+c.port+"/"+c.history_arr[0],_:d.now()},function(b){if(-1!=b.indexOf("Current Song")){q=b.indexOf("Current Song")+12;x=b.length;b=b.substr(q,x);z=b.split("<tr><td>");z.shift();for(b=0;b<z.length;b++)r=z[b].split("</td><td>"),q=String(r[1]).indexOf("</"),-1!=q&&(x=q,r[1]=r[1].substr(0,x),r[1]=r[1].replace(/<\/?[^>]+(>|$)/g,""),""!=r[1]&&"Empty Title"!=r[1]&&"ROCK RADIO - CISTI ROCK! - www.rockradio.si"!=r[1]&&(w=r[1].split("-"),void 0===w[0]&&(w[0]=""),void 0===w[1]&&(w[1]=""),c.title_arr.push(w[1].trim()),
 c.artist_arr.push(w[0].trim()),c.time_arr.push(r[0].trim()),c.image_arr.push(a.noImageAvailable)));c.title_arr=c.title_arr.slice(0,Math.min(a.numberOfElementsDisplayed,c.artist_arr.length));c.artist_arr=c.artist_arr.slice(0,Math.min(a.numberOfElementsDisplayed,c.artist_arr.length));c.time_arr=c.time_arr.slice(0,Math.min(a.numberOfElementsDisplayed,c.artist_arr.length));c.image_arr=c.image_arr.slice(0,Math.min(a.numberOfElementsDisplayed,c.artist_arr.length))}c.time_arr[0]=G(a,c);A(a,c,l,u,h,n,e,k,
 t);for(b=0;b<c.title_arr.length;b++)F(a,c,g,n,e,k,t,l,b);c.radioReaderAjaxInterval=setInterval(function(){J(a,c,g,n,e,k,t,l,u,h)},1E3*a.nowPlayingInterval)})});l.on("mouseover",function(){l.css({"border-left-color":a.playButtonHoverColor,"border-right-color":a.playButtonHoverColor})});l.on("mouseout",function(){l.css({"border-left-color":a.playButtonColor,"border-right-color":a.playButtonColor})});l.on("click",function(){var b=c.isFlashNeeded?!l.hasClass("AudioPause"):document.getElementById(c.audioID).paused;
 K();0==b?(c.isFlashNeeded?c.myFlashObject.myAS3function("_pause_radio_stream_",1):document.getElementById(c.audioID).pause(),l.removeClass("AudioPause"),C(a,c,g)):(c.isFlashNeeded?c.myFlashObject.myAS3function("_play_radio_stream_",1):(document.getElementById(c.audioID).src=a.radio_stream,document.getElementById(c.audioID).load(),document.getElementById(c.audioID).play()),l.addClass("AudioPause"),d(".audio11_sound",g).css({"-webkit-animation-play-state":"running","-moz-animation-play-state":"running",
 "-ms-animation-play-state":"running","-o-animation-play-state":"running","animation-play-state":"running"}),d(".audio11_sound2",g).css({"-webkit-animation-play-state":"running","-moz-animation-play-state":"running","-ms-animation-play-state":"running","-o-animation-play-state":"running","animation-play-state":"running"}))});var y=function(){var b=m.parent().width();a.sticky&&a.width100Proc&&(b=d(window).width());if(b<a.playerWidth||c.playerWidth!=a.playerWidth||a.width100Proc)c.playerWidth=b<a.playerWidth||
 a.width100Proc?b-2*a.borderWidth:a.playerWidth,c.songTitleFontSize=a.songTitleFontSize,c.songTitleHeight=a.songTitleHeight,c.songAuthorHeight=a.songAuthorHeight,b<a.playerWidth&&!a.width100Proc||720>b-a.historyLeftPadding-a.historyRightPadding?(c.historyLeftPadding=15,c.historyRightPadding=15,500>b-a.historyLeftPadding-a.historyRightPadding&&(c.historyLeftPadding=2,c.historyRightPadding=2,c.songTitleFontSize=14,c.songTitleHeight=a.songTitleHeight-4,c.songAuthorHeight=a.songAuthorHeight-1)):(c.historyLeftPadding=
 a.historyLeftPadding,c.historyRightPadding=a.historyRightPadding),t.css({"padding-left":c.historyLeftPadding+"px","padding-right":c.historyRightPadding+"px"}),m.width(c.playerWidth),A(a,c,l,u,h,n,e,k,t),700>c.playerWidth?(c.barsCurDisplay="none",c.barsDisplayTimeout=1):(c.barsCurDisplay="block",0===c.barsDisplayTimeout&&(c.barsDisplayTimeout=1E3)),setTimeout(function(){h.css({display:c.barsCurDisplay})},c.barsDisplayTimeout)},B=!1;d(window).resize(function(){var b=!0;-1!=f&&9==f&&0==c.windowWidth&&
 (b=!1);c.windowWidth==d(window).width()?(b=!1,a.windowCurOrientation!=window.orientation&&-1!=navigator.userAgent.indexOf("Android")&&(a.windowCurOrientation=window.orientation,b=!0)):c.windowWidth=d(window).width();a.responsive&&b&&(!1!==B&&clearTimeout(B),B=setTimeout(function(){y()},300))});a.responsive&&y()})};d.fn.audio11_html5.defaults={radio_stream:"http://194.232.200.150:80/;",historyFile:"",nowPlayingFile:"",nextFile:"",useRadioServerTime:!1,playerWidth:760,borderWidth:1,borderColor:"#bfbfbf",
 bgColor:"#FFFFFF",bgColorOpacity:1,barsColor:"#FFFFFF",playButtonColor:"#FFFFFF",playButtonHoverColor:"#d7d7d7",autoPlay:!0,centerPlayer:!0,responsive:!0,nowPlayingInterval:35,grabArtistPhoto:!0,pathToAjaxFiles:"",noImageAvailable:"noimageavailable.jpg",historyLeftPadding:25,historyRightPadding:25,historyTopPadding:30,historyBottomPadding:30,historyRecordTitleLimit:24,historyRecordAuthorLimit:34,titleLimitAddition:8,authorLimitAddition:10,playButAddtionalRightMargin:18,songTitleFontSize:18,songTitleHeight:28,
 songAuthorHeight:25,songAuthorLineSeparatorOffColor:"#bfbfbf",historyRecordTimeOffColor:"#000000",historyRecordSongOffColor:"#000000",historyRecordAuthorOffColor:"#575757",songAuthorLineSeparatorOnColor:"transparent",historyRecordTimeOnColor:"#FFFFFF",historyRecordSongOnColor:"#FFFFFF",historyRecordAuthorOnColor:"#FFFFFF",historyRecordBackgroundOnColor:"#dd0060",numberOfElementsDisplayed:6,sticky:!1,width100Proc:!1,origWidth:0}})(jQuery);
