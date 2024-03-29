function randString(n) {
    if(!n)
    {
        n = 5;
    }

    var text = '';
    var possible = 'abcdefghijklmnopqrstuvwxyz';

    for(var i=0; i < n; i++)
    {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }

    return text;
}

// Cookies
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";

    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

function getUsername() {
	
	 var cookie = readCookie('cookie_name');
	 if (!cookie) {
	    cookie =  randString(9);
	    createCookie('cookie_name', cookie, 30);
	 }

	var username = cookie;
	if (!'localStorage' in window) {
		return username;
	}

	username = window.localStorage.getItem('username');
	if (!username) {
		username = randString(9);
		window.localStorage.setItem('username', username);
	}

	return username;
}

kiwi.plugin('ident', function(kiwi) {
	kiwi.state.$on('network.new', function(event) {
		event.network.username = getUsername();

	});
});
