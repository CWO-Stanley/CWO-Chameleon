!function(e){var t={};function n(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(i,r,function(t){return e[t]}.bind(null,r));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=14)}([function(e,t,n){var i=n(3),r=n(9);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1},a=(i(r,o),r.locals?r.locals:{});e.exports=a},function(e,t,n){var i=n(3),r=n(11);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1},a=(i(r,o),r.locals?r.locals:{});e.exports=a},function(e,t,n){var i=n(3),r=n(13);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1},a=(i(r,o),r.locals?r.locals:{});e.exports=a},function(e,t,n){"use strict";var i,r=function(){return void 0===i&&(i=Boolean(window&&document&&document.all&&!window.atob)),i},o=function(){var e={};return function(t){if(void 0===e[t]){var n=document.querySelector(t);if(window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(e){n=null}e[t]=n}return e[t]}}(),a=[];function s(e){for(var t=-1,n=0;n<a.length;n++)if(a[n].identifier===e){t=n;break}return t}function c(e,t){for(var n={},i=[],r=0;r<e.length;r++){var o=e[r],c=t.base?o[0]+t.base:o[0],l=n[c]||0,u="".concat(c," ").concat(l);n[c]=l+1;var f=s(u),p={css:o[1],media:o[2],sourceMap:o[3]};-1!==f?(a[f].references++,a[f].updater(p)):a.push({identifier:u,updater:m(p,t),references:1}),i.push(u)}return i}function l(e){var t=document.createElement("style"),i=e.attributes||{};if(void 0===i.nonce){var r=n.nc;r&&(i.nonce=r)}if(Object.keys(i).forEach((function(e){t.setAttribute(e,i[e])})),"function"==typeof e.insert)e.insert(t);else{var a=o(e.insert||"head");if(!a)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");a.appendChild(t)}return t}var u,f=(u=[],function(e,t){return u[e]=t,u.filter(Boolean).join("\n")});function p(e,t,n,i){var r=n?"":i.media?"@media ".concat(i.media," {").concat(i.css,"}"):i.css;if(e.styleSheet)e.styleSheet.cssText=f(t,r);else{var o=document.createTextNode(r),a=e.childNodes;a[t]&&e.removeChild(a[t]),a.length?e.insertBefore(o,a[t]):e.appendChild(o)}}function d(e,t,n){var i=n.css,r=n.media,o=n.sourceMap;if(r?e.setAttribute("media",r):e.removeAttribute("media"),o&&btoa&&(i+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o))))," */")),e.styleSheet)e.styleSheet.cssText=i;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(i))}}var b=null,h=0;function m(e,t){var n,i,r;if(t.singleton){var o=h++;n=b||(b=l(t)),i=p.bind(null,n,o,!1),r=p.bind(null,n,o,!0)}else n=l(t),i=d.bind(null,n,t),r=function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(n)};return i(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap)return;i(e=t)}else r()}}e.exports=function(e,t){(t=t||{}).singleton||"boolean"==typeof t.singleton||(t.singleton=r());var n=c(e=e||[],t);return function(e){if(e=e||[],"[object Array]"===Object.prototype.toString.call(e)){for(var i=0;i<n.length;i++){var r=s(n[i]);a[r].references--}for(var o=c(e,t),l=0;l<n.length;l++){var u=s(n[l]);0===a[u].references&&(a[u].updater(),a.splice(u,1))}n=o}}}},function(e,t,n){"use strict";e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var n=function(e,t){var n=e[1]||"",i=e[3];if(!i)return n;if(t&&"function"==typeof btoa){var r=(a=i,s=btoa(unescape(encodeURIComponent(JSON.stringify(a)))),c="sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(s),"/*# ".concat(c," */")),o=i.sources.map((function(e){return"/*# sourceURL=".concat(i.sourceRoot||"").concat(e," */")}));return[n].concat(o).concat([r]).join("\n")}var a,s,c;return[n].join("\n")}(t,e);return t[2]?"@media ".concat(t[2]," {").concat(n,"}"):n})).join("")},t.i=function(e,n,i){"string"==typeof e&&(e=[[null,e,""]]);var r={};if(i)for(var o=0;o<this.length;o++){var a=this[o][0];null!=a&&(r[a]=!0)}for(var s=0;s<e.length;s++){var c=[].concat(e[s]);i&&r[c[0]]||(n&&(c[2]?c[2]="".concat(n," and ").concat(c[2]):c[2]=n),t.push(c))}},t}},function(e,t,n){(function(e,i){var r;
/*!
 * Platform.js <https://mths.be/platform>
 * Copyright 2014-2018 Benjamin Tan <https://bnjmnt4n.now.sh/>
 * Copyright 2011-2013 John-David Dalton <http://allyoucanleet.com/>
 * Available under MIT license <https://mths.be/mit>
 */(function(){"use strict";var o={function:!0,object:!0},a=o[typeof window]&&window||this,s=o[typeof t]&&t,c=o[typeof e]&&e&&!e.nodeType&&e,l=s&&c&&"object"==typeof i&&i;!l||l.global!==l&&l.window!==l&&l.self!==l||(a=l);var u=Math.pow(2,53)-1,f=/\bOpera/,p=Object.prototype,d=p.hasOwnProperty,b=p.toString;function h(e){return(e=String(e)).charAt(0).toUpperCase()+e.slice(1)}function m(e){return e=y(e),/^(?:webOS|i(?:OS|P))/.test(e)?e:h(e)}function g(e,t){for(var n in e)d.call(e,n)&&t(e[n],n,e)}function v(e){return null==e?h(e):b.call(e).slice(8,-1)}function S(e){return String(e).replace(/([ -])(?!$)/g,"$1?")}function x(e,t){var n=null;return function(e,t){var n=-1,i=e?e.length:0;if("number"==typeof i&&i>-1&&i<=u)for(;++n<i;)t(e[n],n,e);else g(e,t)}(e,(function(i,r){n=t(n,i,r,e)})),n}function y(e){return String(e).replace(/^ +| +$/g,"")}var w=function e(t){var n=a,i=t&&"object"==typeof t&&"String"!=v(t);i&&(n=t,t=null);var r=n.navigator||{},o=r.userAgent||"";t||(t=o);var s,c,l,u,p,d=i?!!r.likeChrome:/\bChrome\b/.test(t)&&!/internal|\n/i.test(b.toString()),h=i?"Object":"ScriptBridgingProxyObject",w=i?"Object":"Environment",k=i&&n.java?"JavaPackage":v(n.java),O=i?"Object":"RuntimeObject",M=/\bJava/.test(k)&&n.java,C=M&&v(n.environment)==w,A=M?"a":"α",_=M?"b":"β",T=n.document||{},E=n.operamini||n.opera,P=f.test(P=i&&E?E["[[Class]]"]:v(E))?P:E=null,j=t,R=[],B=null,I=t==o,$=I&&E&&"function"==typeof E.version&&E.version(),W=x([{label:"EdgeHTML",pattern:"Edge"},"Trident",{label:"WebKit",pattern:"AppleWebKit"},"iCab","Presto","NetFront","Tasman","KHTML","Gecko"],(function(e,n){return e||RegExp("\\b"+(n.pattern||S(n))+"\\b","i").exec(t)&&(n.label||n)})),L=function(e){return x(e,(function(e,n){return e||RegExp("\\b"+(n.pattern||S(n))+"\\b","i").exec(t)&&(n.label||n)}))}(["Adobe AIR","Arora","Avant Browser","Breach","Camino","Electron","Epiphany","Fennec","Flock","Galeon","GreenBrowser","iCab","Iceweasel","K-Meleon","Konqueror","Lunascape","Maxthon",{label:"Microsoft Edge",pattern:"Edge"},"Midori","Nook Browser","PaleMoon","PhantomJS","Raven","Rekonq","RockMelt",{label:"Samsung Internet",pattern:"SamsungBrowser"},"SeaMonkey",{label:"Silk",pattern:"(?:Cloud9|Silk-Accelerated)"},"Sleipnir","SlimBrowser",{label:"SRWare Iron",pattern:"Iron"},"Sunrise","Swiftfox","Waterfox","WebPositive","Opera Mini",{label:"Opera Mini",pattern:"OPiOS"},"Opera",{label:"Opera",pattern:"OPR"},"Chrome",{label:"Chrome Mobile",pattern:"(?:CriOS|CrMo)"},{label:"Firefox",pattern:"(?:Firefox|Minefield)"},{label:"Firefox for iOS",pattern:"FxiOS"},{label:"IE",pattern:"IEMobile"},{label:"IE",pattern:"MSIE"},"Safari"]),N=J([{label:"BlackBerry",pattern:"BB10"},"BlackBerry",{label:"Galaxy S",pattern:"GT-I9000"},{label:"Galaxy S2",pattern:"GT-I9100"},{label:"Galaxy S3",pattern:"GT-I9300"},{label:"Galaxy S4",pattern:"GT-I9500"},{label:"Galaxy S5",pattern:"SM-G900"},{label:"Galaxy S6",pattern:"SM-G920"},{label:"Galaxy S6 Edge",pattern:"SM-G925"},{label:"Galaxy S7",pattern:"SM-G930"},{label:"Galaxy S7 Edge",pattern:"SM-G935"},"Google TV","Lumia","iPad","iPod","iPhone","Kindle",{label:"Kindle Fire",pattern:"(?:Cloud9|Silk-Accelerated)"},"Nexus","Nook","PlayBook","PlayStation Vita","PlayStation","TouchPad","Transformer",{label:"Wii U",pattern:"WiiU"},"Wii","Xbox One",{label:"Xbox 360",pattern:"Xbox"},"Xoom"]),F=function(e){return x(e,(function(e,n,i){return e||(n[N]||n[/^[a-z]+(?: +[a-z]+\b)*/i.exec(N)]||RegExp("\\b"+S(i)+"(?:\\b|\\w*\\d)","i").exec(t))&&i}))}({Apple:{iPad:1,iPhone:1,iPod:1},Archos:{},Amazon:{Kindle:1,"Kindle Fire":1},Asus:{Transformer:1},"Barnes & Noble":{Nook:1},BlackBerry:{PlayBook:1},Google:{"Google TV":1,Nexus:1},HP:{TouchPad:1},HTC:{},LG:{},Microsoft:{Xbox:1,"Xbox One":1},Motorola:{Xoom:1},Nintendo:{"Wii U":1,Wii:1},Nokia:{Lumia:1},Samsung:{"Galaxy S":1,"Galaxy S2":1,"Galaxy S3":1,"Galaxy S4":1},Sony:{PlayStation:1,"PlayStation Vita":1}}),G=function(e){return x(e,(function(e,n){var i=n.pattern||S(n);return!e&&(e=RegExp("\\b"+i+"(?:/[\\d.]+|[ \\w.]*)","i").exec(t))&&(e=function(e,t,n){var i={"10.0":"10",6.4:"10 Technical Preview",6.3:"8.1",6.2:"8",6.1:"Server 2008 R2 / 7","6.0":"Server 2008 / Vista",5.2:"Server 2003 / XP 64-bit",5.1:"XP",5.01:"2000 SP1","5.0":"2000","4.0":"NT","4.90":"ME"};return t&&n&&/^Win/i.test(e)&&!/^Windows Phone /i.test(e)&&(i=i[/[\d.]+$/.exec(e)])&&(e="Windows "+i),e=String(e),t&&n&&(e=e.replace(RegExp(t,"i"),n)),e=m(e.replace(/ ce$/i," CE").replace(/\bhpw/i,"web").replace(/\bMacintosh\b/,"Mac OS").replace(/_PowerPC\b/i," OS").replace(/\b(OS X) [^ \d]+/i,"$1").replace(/\bMac (OS X)\b/,"$1").replace(/\/(\d)/," $1").replace(/_/g,".").replace(/(?: BePC|[ .]*fc[ \d.]+)$/i,"").replace(/\bx86\.64\b/gi,"x86_64").replace(/\b(Windows Phone) OS\b/,"$1").replace(/\b(Chrome OS \w+) [\d.]+\b/,"$1").split(" on ")[0])}(e,i,n.label||n)),e}))}(["Windows Phone","Android","CentOS",{label:"Chrome OS",pattern:"CrOS"},"Debian","Fedora","FreeBSD","Gentoo","Haiku","Kubuntu","Linux Mint","OpenBSD","Red Hat","SuSE","Ubuntu","Xubuntu","Cygwin","Symbian OS","hpwOS","webOS ","webOS","Tablet OS","Tizen","Linux","Mac OS X","Macintosh","Mac","Windows 98;","Windows "]);function J(e){return x(e,(function(e,n){var i=n.pattern||S(n);return!e&&(e=RegExp("\\b"+i+" *\\d+[.\\w_]*","i").exec(t)||RegExp("\\b"+i+" *\\w+-[\\w]*","i").exec(t)||RegExp("\\b"+i+"(?:; *(?:[a-z]+[_-])?[a-z]+\\d+|[^ ();-]*)","i").exec(t))&&((e=String(n.label&&!RegExp(i,"i").test(n.label)?n.label:e).split("/"))[1]&&!/[\d.]+/.test(e[0])&&(e[0]+=" "+e[1]),n=n.label||n,e=m(e[0].replace(RegExp(i,"i"),n).replace(RegExp("; *(?:"+n+"[_-])?","i")," ").replace(RegExp("("+n+")[-_.]?(\\w)","i"),"$1 $2"))),e}))}if(W&&(W=[W]),F&&!N&&(N=J([F])),(s=/\bGoogle TV\b/.exec(N))&&(N=s[0]),/\bSimulator\b/i.test(t)&&(N=(N?N+" ":"")+"Simulator"),"Opera Mini"==L&&/\bOPiOS\b/.test(t)&&R.push("running in Turbo/Uncompressed mode"),"IE"==L&&/\blike iPhone OS\b/.test(t)?(F=(s=e(t.replace(/like iPhone OS/,""))).manufacturer,N=s.product):/^iP/.test(N)?(L||(L="Safari"),G="iOS"+((s=/ OS ([\d_]+)/i.exec(t))?" "+s[1].replace(/_/g,"."):"")):"Konqueror"!=L||/buntu/i.test(G)?F&&"Google"!=F&&(/Chrome/.test(L)&&!/\bMobile Safari\b/i.test(t)||/\bVita\b/.test(N))||/\bAndroid\b/.test(G)&&/^Chrome/.test(L)&&/\bVersion\//i.test(t)?(L="Android Browser",G=/\bAndroid\b/.test(G)?G:"Android"):"Silk"==L?(/\bMobi/i.test(t)||(G="Android",R.unshift("desktop mode")),/Accelerated *= *true/i.test(t)&&R.unshift("accelerated")):"PaleMoon"==L&&(s=/\bFirefox\/([\d.]+)\b/.exec(t))?R.push("identifying as Firefox "+s[1]):"Firefox"==L&&(s=/\b(Mobile|Tablet|TV)\b/i.exec(t))?(G||(G="Firefox OS"),N||(N=s[1])):!L||(s=!/\bMinefield\b/i.test(t)&&/\b(?:Firefox|Safari)\b/.exec(L))?(L&&!N&&/[\/,]|^[^(]+?\)/.test(t.slice(t.indexOf(s+"/")+8))&&(L=null),(s=N||F||G)&&(N||F||/\b(?:Android|Symbian OS|Tablet OS|webOS)\b/.test(G))&&(L=/[a-z]+(?: Hat)?/i.exec(/\bAndroid\b/.test(G)?G:s)+" Browser")):"Electron"==L&&(s=(/\bChrome\/([\d.]+)\b/.exec(t)||0)[1])&&R.push("Chromium "+s):G="Kubuntu",$||($=x(["(?:Cloud9|CriOS|CrMo|Edge|FxiOS|IEMobile|Iron|Opera ?Mini|OPiOS|OPR|Raven|SamsungBrowser|Silk(?!/[\\d.]+$))","Version",S(L),"(?:Firefox|Minefield|NetFront)"],(function(e,n){return e||(RegExp(n+"(?:-[\\d.]+/|(?: for [\\w-]+)?[ /-])([\\d.]+[^ ();/_-]*)","i").exec(t)||0)[1]||null}))),(s=("iCab"==W&&parseFloat($)>3?"WebKit":/\bOpera\b/.test(L)&&(/\bOPR\b/.test(t)?"Blink":"Presto"))||/\b(?:Midori|Nook|Safari)\b/i.test(t)&&!/^(?:Trident|EdgeHTML)$/.test(W)&&"WebKit"||!W&&/\bMSIE\b/i.test(t)&&("Mac OS"==G?"Tasman":"Trident")||"WebKit"==W&&/\bPlayStation\b(?! Vita\b)/i.test(L)&&"NetFront")&&(W=[s]),"IE"==L&&(s=(/; *(?:XBLWP|ZuneWP)(\d+)/i.exec(t)||0)[1])?(L+=" Mobile",G="Windows Phone "+(/\+$/.test(s)?s:s+".x"),R.unshift("desktop mode")):/\bWPDesktop\b/i.test(t)?(L="IE Mobile",G="Windows Phone 8.x",R.unshift("desktop mode"),$||($=(/\brv:([\d.]+)/.exec(t)||0)[1])):"IE"!=L&&"Trident"==W&&(s=/\brv:([\d.]+)/.exec(t))&&(L&&R.push("identifying as "+L+($?" "+$:"")),L="IE",$=s[1]),I){if(u="global",p=null!=(l=n)?typeof l[u]:"number",/^(?:boolean|number|string|undefined)$/.test(p)||"object"==p&&!l[u])v(s=n.runtime)==h?(L="Adobe AIR",G=s.flash.system.Capabilities.os):v(s=n.phantom)==O?(L="PhantomJS",$=(s=s.version||null)&&s.major+"."+s.minor+"."+s.patch):"number"==typeof T.documentMode&&(s=/\bTrident\/(\d+)/i.exec(t))?($=[$,T.documentMode],(s=+s[1]+4)!=$[1]&&(R.push("IE "+$[1]+" mode"),W&&(W[1]=""),$[1]=s),$="IE"==L?String($[1].toFixed(1)):$[0]):"number"==typeof T.documentMode&&/^(?:Chrome|Firefox)\b/.test(L)&&(R.push("masking as "+L+" "+$),L="IE",$="11.0",W=["Trident"],G="Windows");else if(M&&(j=(s=M.lang.System).getProperty("os.arch"),G=G||s.getProperty("os.name")+" "+s.getProperty("os.version")),C){try{$=n.require("ringo/engine").version.join("."),L="RingoJS"}catch(e){(s=n.system)&&s.global.system==n.system&&(L="Narwhal",G||(G=s[0].os||null))}L||(L="Rhino")}else"object"==typeof n.process&&!n.process.browser&&(s=n.process)&&("object"==typeof s.versions&&("string"==typeof s.versions.electron?(R.push("Node "+s.versions.node),L="Electron",$=s.versions.electron):"string"==typeof s.versions.nw&&(R.push("Chromium "+$,"Node "+s.versions.node),L="NW.js",$=s.versions.nw)),L||(L="Node.js",j=s.arch,G=s.platform,$=($=/[\d.]+/.exec(s.version))?$[0]:null));G=G&&m(G)}if($&&(s=/(?:[ab]|dp|pre|[ab]\d+pre)(?:\d+\+?)?$/i.exec($)||/(?:alpha|beta)(?: ?\d)?/i.exec(t+";"+(I&&r.appMinorVersion))||/\bMinefield\b/i.test(t)&&"a")&&(B=/b/i.test(s)?"beta":"alpha",$=$.replace(RegExp(s+"\\+?$"),"")+("beta"==B?_:A)+(/\d+\+?/.exec(s)||"")),"Fennec"==L||"Firefox"==L&&/\b(?:Android|Firefox OS)\b/.test(G))L="Firefox Mobile";else if("Maxthon"==L&&$)$=$.replace(/\.[\d.]+/,".x");else if(/\bXbox\b/i.test(N))"Xbox 360"==N&&(G=null),"Xbox 360"==N&&/\bIEMobile\b/.test(t)&&R.unshift("mobile mode");else if(!/^(?:Chrome|IE|Opera)$/.test(L)&&(!L||N||/Browser|Mobi/.test(L))||"Windows CE"!=G&&!/Mobi/i.test(t))if("IE"==L&&I)try{null===n.external&&R.unshift("platform preview")}catch(e){R.unshift("embedded")}else(/\bBlackBerry\b/.test(N)||/\bBB10\b/.test(t))&&(s=(RegExp(N.replace(/ +/g," *")+"/([.\\d]+)","i").exec(t)||0)[1]||$)?(G=((s=[s,/BB10/.test(t)])[1]?(N=null,F="BlackBerry"):"Device Software")+" "+s[0],$=null):this!=g&&"Wii"!=N&&(I&&E||/Opera/.test(L)&&/\b(?:MSIE|Firefox)\b/i.test(t)||"Firefox"==L&&/\bOS X (?:\d+\.){2,}/.test(G)||"IE"==L&&(G&&!/^Win/.test(G)&&$>5.5||/\bWindows XP\b/.test(G)&&$>8||8==$&&!/\bTrident\b/.test(t)))&&!f.test(s=e.call(g,t.replace(f,"")+";"))&&s.name&&(s="ing as "+s.name+((s=s.version)?" "+s:""),f.test(L)?(/\bIE\b/.test(s)&&"Mac OS"==G&&(G=null),s="identify"+s):(s="mask"+s,L=P?m(P.replace(/([a-z])([A-Z])/g,"$1 $2")):"Opera",/\bIE\b/.test(s)&&(G=null),I||($=null)),W=["Presto"],R.push(s));else L+=" Mobile";(s=(/\bAppleWebKit\/([\d.]+\+?)/i.exec(t)||0)[1])&&(s=[parseFloat(s.replace(/\.(\d)$/,".0$1")),s],"Safari"==L&&"+"==s[1].slice(-1)?(L="WebKit Nightly",B="alpha",$=s[1].slice(0,-1)):$!=s[1]&&$!=(s[2]=(/\bSafari\/([\d.]+\+?)/i.exec(t)||0)[1])||($=null),s[1]=(/\bChrome\/([\d.]+)/i.exec(t)||0)[1],537.36==s[0]&&537.36==s[2]&&parseFloat(s[1])>=28&&"WebKit"==W&&(W=["Blink"]),I&&(d||s[1])?(W&&(W[1]="like Chrome"),s=s[1]||((s=s[0])<530?1:s<532?2:s<532.05?3:s<533?4:s<534.03?5:s<534.07?6:s<534.1?7:s<534.13?8:s<534.16?9:s<534.24?10:s<534.3?11:s<535.01?12:s<535.02?"13+":s<535.07?15:s<535.11?16:s<535.19?17:s<536.05?18:s<536.1?19:s<537.01?20:s<537.11?"21+":s<537.13?23:s<537.18?24:s<537.24?25:s<537.36?26:"Blink"!=W?"27":"28")):(W&&(W[1]="like Safari"),s=(s=s[0])<400?1:s<500?2:s<526?3:s<533?4:s<534?"4+":s<535?5:s<537?6:s<538?7:s<601?8:"8"),W&&(W[1]+=" "+(s+="number"==typeof s?".x":/[.+]/.test(s)?"":"+")),"Safari"==L&&(!$||parseInt($)>45)&&($=s)),"Opera"==L&&(s=/\bzbov|zvav$/.exec(G))?(L+=" ",R.unshift("desktop mode"),"zvav"==s?(L+="Mini",$=null):L+="Mobile",G=G.replace(RegExp(" *"+s+"$"),"")):"Safari"==L&&/\bChrome\b/.exec(W&&W[1])&&(R.unshift("desktop mode"),L="Chrome Mobile",$=null,/\bOS X\b/.test(G)?(F="Apple",G="iOS 4.3+"):G=null),$&&0==$.indexOf(s=/[\d.]+$/.exec(G))&&t.indexOf("/"+s+"-")>-1&&(G=y(G.replace(s,""))),W&&!/\b(?:Avant|Nook)\b/.test(L)&&(/Browser|Lunascape|Maxthon/.test(L)||"Safari"!=L&&/^iOS/.test(G)&&/\bSafari\b/.test(W[1])||/^(?:Adobe|Arora|Breach|Midori|Opera|Phantom|Rekonq|Rock|Samsung Internet|Sleipnir|Web)/.test(L)&&W[1])&&(s=W[W.length-1])&&R.push(s),R.length&&(R=["("+R.join("; ")+")"]),F&&N&&N.indexOf(F)<0&&R.push("on "+F),N&&R.push((/^on /.test(R[R.length-1])?"":"on ")+N),G&&(s=/ ([\d.+]+)$/.exec(G),c=s&&"/"==G.charAt(G.length-s[0].length-1),G={architecture:32,family:s&&!c?G.replace(s[0],""):G,version:s?s[1]:null,toString:function(){var e=this.version;return this.family+(e&&!c?" "+e:"")+(64==this.architecture?" 64-bit":"")}}),(s=/\b(?:AMD|IA|Win|WOW|x86_|x)64\b/i.exec(j))&&!/\bi686\b/i.test(j)?(G&&(G.architecture=64,G.family=G.family.replace(RegExp(" *"+s),"")),L&&(/\bWOW64\b/i.test(t)||I&&/\w(?:86|32)$/.test(r.cpuClass||r.platform)&&!/\bWin64; x64\b/i.test(t))&&R.unshift("32-bit")):G&&/^OS X/.test(G.family)&&"Chrome"==L&&parseFloat($)>=39&&(G.architecture=64),t||(t=null);var X={};return X.description=t,X.layout=W&&W[0],X.manufacturer=F,X.name=L,X.prerelease=B,X.product=N,X.ua=t,X.version=L&&$,X.os=G||{architecture:null,family:null,version:null,toString:function(){return"null"}},X.parse=e,X.toString=function(){return this.description||""},X.version&&R.unshift($),X.name&&R.unshift(L),G&&L&&(G!=String(G).split(" ")[0]||G!=L.split(" ")[0]&&!N)&&R.push(N?"("+G+")":"on "+G),R.length&&(X.description=R.join(" ")),X}();a.platform=w,void 0===(r=function(){return w}.call(t,n,t,e))||(e.exports=r)}).call(this)}).call(this,n(6)(e),n(7))},function(e,t){e.exports=function(e){return e.webpackPolyfill||(e.deprecate=function(){},e.paths=[],e.children||(e.children=[]),Object.defineProperty(e,"loaded",{enumerable:!0,get:function(){return e.l}}),Object.defineProperty(e,"id",{enumerable:!0,get:function(){return e.i}}),e.webpackPolyfill=1),e}},function(e,t){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(e){"object"==typeof window&&(n=window)}e.exports=n},function(e,t,n){"use strict";var i=n(0);n.n(i).a},function(e,t,n){(t=n(4)(!1)).push([e.i,"\n.plugin-conference-jitsi {\n    height: 100%;\n\n    /* fixes firefox showing scrollbar */\n    overflow: hidden;\n}\n.plugin-conference-overlay {\n    background-color: rgba(0, 0, 0, 0.2);\n    color: #fff;\n    padding: 8px;\n    position: absolute;\n    top: 0;\n    z-index: 10;\n}\n.plugin-conference-notsupported {\n    background-color: var(--brand-error);\n    border-radius: 5px;\n    color: var(--brand-default-fg);\n    display: inline-block;\n    font-size: 130%;\n    font-weight: 600;\n    margin: 25px auto;\n    padding: 25px;\n}\n",""]),e.exports=t},function(e,t,n){"use strict";var i=n(1);n.n(i).a},function(e,t,n){(t=n(4)(!1)).push([e.i,"\n.plugin-conference-button {\n    cursor: pointer;\n}\n",""]),e.exports=t},function(e,t,n){"use strict";var i=n(2);n.n(i).a},function(e,t,n){(t=n(4)(!1)).push([e.i,"\n.plugin-conference-join {\n    background: var(--brand-midtone);\n    box-sizing: border-box;\n    font-size: 1.05em;\n    line-height: 1.05em;\n    padding: 20px;\n    text-align: center;\n    width: 100%;\n}\n.plugin-conference-jointext {\n    display: inline-block;\n    margin-right: 10px;\n    line-height: 2em;\n}\n.plugin-conference-joinbutton {\n    margin-left: 8px;\n}\n",""]),e.exports=t},function(e,t,n){"use strict";function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function r(e){return function(e){if(Array.isArray(e))return o(e)}(e)||function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}(e)||function(e,t){if(!e)return;if("string"==typeof e)return o(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(n);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return o(e,t)}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function o(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,i=new Array(t);n<t;n++)i[n]=e[n];return i}n.r(t);var a="plugin-conference",s={tagID:1,secure:!1,server:"meet.jit.si",queries:!0,channels:!0,viewHeight:"40%",enabledInChannels:["*"],groupInvitesTTL:3e4,maxParticipantsLength:60,participantsMore:"more...",inviteText:"{{ nick }} is inviting you to a private call.",joinText:"{{ nick }} has joined the conference.",joinButtonText:"Join now!",showLink:!1,useLinkShortener:!1,linkShortenerURL:"https://x0.no/api/?{{ link }}",linkShortenerAPIToken:"",interfaceConfigOverwrite:{SHOW_JITSI_WATERMARK:!1,SHOW_WATERMARK_FOR_GUESTS:!1,TOOLBAR_BUTTONS:["microphone","camera","fullscreen","hangup","settings","videoquality","filmstrip","fodeviceselection","stats","shortcuts"]},configOverwrite:{startWithVideoMuted:!0,startWithAudioMuted:!0}};function c(){!function e(t,n){_.each(t,(function(t,o){var s,c,l=[].concat(r(n),[o]),f=l.join(".");"object"!==i(t)||_.isArray(t)?void 0===u(f)&&(s=f,c=t,kiwi.state.setSetting(["settings",a,s].join("."),c)):e(t,l)}))}(s,[])}function l(e){return kiwi.state.setting([a,e].join("."))}function u(e){return kiwi.state.getSetting(["settings",a,e].join("."))}var f=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[e.showButton?n("div",{staticClass:"plugin-conference-button",on:{click:function(t){return e.openJitsi()}}},[e._m(0)]):e._e()])};f._withStripped=!0;var p=function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"plugin-conference-jitsi"},[this.isJoined?t("div",{staticClass:"plugin-conference-overlay"},[this._v("\n        "+this._s(this.roomName)+" @ "+this._s(this.network.name)+"\n    ")]):this._e()])};p._withStripped=!0;var d=n(5),b=n.n(d),h={props:["componentProps"],data:function(){return{api:null,link:"",token:"",isJoined:!1,loadingAnimation:null}},computed:{roomName:function(){if(this.buffer.isQuery()){var e=[this.network.nick,this.buffer.name];return e.sort(),"query-"+e.join("+")}return this.buffer.name},encodedRoomName:function(){return(this.network.connection.server+"/"+this.roomName).split("").map((function(e){return e.charCodeAt(0).toString(16)})).join("")},buffer:function(){return this.componentProps.buffer},network:function(){return this.buffer.getNetwork()}},mounted:function(){var e=this;if("IE"===b.a.name){var t=document.createElement("div");return t.style.textAlign="center",t.innerHTML='<div class="plugin-conference-notsupported">This browser is not supported.<br />Please update your browser.</div>',void this.$el.appendChild(t)}this.loadingAnimationStart(),l("showLink")&&this.getLink(),l("secure")?(kiwi.once("irc.raw.EXTJWT",(function(t,n){e.token=n.params[1],e.scriptLoad()})),this.network.ircClient.raw("EXTJWT",this.roomName)):this.scriptLoad(),this.$nextTick((function(){e.$parent.setHeight(l("viewHeight"))}))},beforeDestroy:function(){this.componentProps.pluginState.isActive=!1;var e=this.$el.parentElement;e&&(e.style.height=""),this.api&&this.api.dispose()},methods:{scriptLoad:function(){var e=this,t=document.createElement("script");t.src="https://"+l("server")+"/external_api.micdisabled.js",t.onload=function(){e.scriptLoaded()},t.defer=!0,this.$el.appendChild(t)},scriptLoaded:function(){var e=this,t=l("configOverwrite");t.prejoinPageEnabled=!1;var n=l("server"),i={roomName:this.encodedRoomName,parentNode:this.$el,configOverwrite:t,interfaceConfigOverwrite:l("interfaceConfigOverwrite")};l("secure")&&(i.jwt=this.token,i.noSsl=!1),this.api=new window.JitsiMeetExternalAPI(n,i),this.api.executeCommand("displayName",this.network.nick),this.api.executeCommand("subject"," "),this.api.once("videoConferenceJoined",(function(){e.loadingAnimationStop(),e.isJoined=!0,l("showLink")&&!e.link||e.sendJoinMessage()})),this.api.once("videoConferenceLeft",(function(){kiwi.emit("mediaviewer.hide")}))},sendJoinMessage:function(){var e=this.buffer.isQuery()?l("inviteText"):l("joinText");e="* "+e.replace("{{ nick }}",this.network.nick),l("showLink")&&this.link&&(e+=" "+this.link);var t=new this.network.ircClient.Message("PRIVMSG",this.buffer.name,e);t.prefix=this.network.nick,t.tags["+kiwiirc.com/conference"]=u("tagID"),this.network.ircClient.raw(t)},loadingAnimationStart:function(){this.loadingAnimation||(this.loadingAnimation=document.createElement("div"),this.loadingAnimation.style.position="absolute",this.loadingAnimation.style.top="34%",this.loadingAnimation.style.marginLeft="45%",this.loadingAnimation.innerHTML='<i class="fa fa-spin fa-spinner" aria-hidden="true" style="font-size: 100px;"/>',this.$el.appendChild(this.loadingAnimation))},loadingAnimationStop:function(){this.$el.removeChild(this.loadingAnimation),this.loadingAnimation=null},getLink:function(){var e="https://"+l("server")+"/"+this.encodedRoomName;if(l("useLinkShortener")){var t=l("linkShortenerURL");t.indexOf("api-ssl.bitly.com")>-1?this.getBitlyLink(t,e):this.getShortLink(t,e)}else this.link=e},getShortLink:function(e,t){var n=this,i=e.replace("{{ link }}",t);fetch("https://cors-anywhere.herokuapp.com/"+i).then((function(e){return e.text()})).then((function(e){var t=kiwi.require("helpers/TextFormatting").urlRegex;new RegExp("^"+t.source+"$").test(e)&&(n.link=e),n.isJoined&&n.sendJoinMessage()}))},getBitlyLink:function(e,t){var n=this,i=l("linkShortenerAPIToken");fetch(e+"?access_token="+i+"&longUrl="+t).then((function(e){return e.json()})).then((function(e){n.link=e.url,n.isJoined&&n.sendJoinMessage()}))}}};n(8);function m(e,t,n,i,r,o,a,s){var c,l="function"==typeof e?e.options:e;if(t&&(l.render=t,l.staticRenderFns=n,l._compiled=!0),i&&(l.functional=!0),o&&(l._scopeId="data-v-"+o),a?(c=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),r&&r.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(a)},l._ssrRegister=c):r&&(c=s?function(){r.call(this,this.$root.$options.shadowRoot)}:r),c)if(l.functional){l._injectStyles=c;var u=l.render;l.render=function(e,t){return c.call(t),u(e,t)}}else{var f=l.beforeCreate;l.beforeCreate=f?[].concat(f,c):[c]}return{exports:e,options:l}}var g=m(h,p,[],!1,null,null,null);g.options.__file="src/components/JitsiMediaView.vue";var v=g.exports,S={data:function(){return{showButton:!1,pluginState:{isActive:!1}}},created:function(){var e=this;kiwi.state.$watch("ui.active_buffer",(function(){var t=kiwi.state.getActiveBuffer();e.showButton=function(e){if(e.isQuery())return!0;var t=u("enabledInChannels");return t.indexOf("*")>-1||t.indexOf(e.name.toLowerCase())>-1}(t)}))},methods:{openJitsi:function(){if(!this.pluginState.isActive)return this.pluginState.isActive=!0,void kiwi.emit("mediaviewer.show",{component:v,componentProps:{pluginState:this.pluginState,buffer:kiwi.state.getActiveBuffer()}});window.confirm("Close current conference?")&&kiwi.emit("mediaviewer.hide")}}},x=(n(10),m(S,f,[function(){var e=this.$createElement,t=this._self._c||e;return t("a",[t("i",{staticClass:"fa fa-camera",attrs:{"aria-hidden":"true"}})])}],!1,null,null,null));x.options.__file="src/components/HeaderButton.vue";var y=x.exports,w=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"plugin-conference-join"},[n("div",{staticClass:"plugin-conference-jointext"},[e._v("\n        "+e._s(e.buffer.isQuery()?e.inviteText:e.joinText)+"\n    ")]),e._v(" "),e.pluginState.isActive?e._e():n("div",{staticClass:"u-button u-button-primary",on:{click:function(t){return e.openJitsi()}}},[n("i",{staticClass:"fa fa-phone",attrs:{"aria-hidden":"true"}}),e._v(" "),n("span",{staticClass:"plugin-conference-joinbutton"},[e._v(e._s(e.joinButtonText))])])])};w._withStripped=!0;var k={props:["buffer"],data:function(){return{pluginState:{isActive:!1},inviteState:{members:[],timeout:0}}},computed:{nicks:function(){for(var e=l("maxParticipantsLength"),t=[],n=0,i=0;i<this.inviteState.members.length;i++){var r=this.inviteState.members[i];if((n+=r.length)>e){t.push(l("participantsMore"));break}t.push(r)}return t},joinButtonText:function(){return l("joinButtonText")},inviteText:function(){return l("inviteText").replace("{{ nick }}",this.nicks.join(", "))},joinText:function(){return l("joinText").replace("{{ nick }}",this.nicks.join(", "))}},methods:{openJitsi:function(){this.pluginState.isActive=!0,kiwi.emit("mediaviewer.show",{component:v,componentProps:{pluginState:this.pluginState,buffer:kiwi.state.getActiveBuffer()}})}}},O=(n(12),m(k,w,[],!1,null,null,null));O.options.__file="src/components/MessageTemplate.vue";var M=O.exports;kiwi.plugin("conference",(function(e){c();var t=u("tagID").toString(),n={isActive:!1},i={};if(u("channels")||u("queries")){var r=new(e.Vue.extend(y))({data:function(){return{pluginState:n}}});r.$mount(),u("channels")&&e.addUi("header_channel",r.$el),u("queries")&&e.addUi("header_query",r.$el)}function o(e){return e&&e["+kiwiirc.com/conference"]===t}e.on("plugin-conference.show",(function(t){!n.isActive&&t.buffer&&(n.isActive=!0,e.emit("mediaviewer.show",{component:v,componentProps:{pluginState:n,buffer:t.buffer}}))})),e.on("plugin-conference.hide",(function(){n.isActive&&e.emit("mediaviewer.hide")})),e.on("irc.message",(function(e,t,n){if(!e.from_server&&o(e.tags)){var r=e.target;e.target===t.nick&&(r=e.nick);var a=i[r];a&&a.timeout+l("groupInvitesTTL")>Date.now()&&(-1===a.members.indexOf(e.nick)&&a.members.push(e.nick),n.handled=!0)}})),e.on("message.new",(function(t){var r=t.message,a=t.buffer;if(o(r.tags)){i[a.name]={members:[r.nick],timeout:Date.now()};var s=new(e.Vue.extend(M))({propsData:{buffer:a},data:function(){return{pluginState:n,inviteState:i[a.name]}}});s.$mount(),r.template=s}}))}))}]);