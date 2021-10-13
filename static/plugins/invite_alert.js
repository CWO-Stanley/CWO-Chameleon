kiwi.plugin('invite_alert', function(kiwi, log) {
	kiwi.on('irc.invite', (event, network) => {	
		if (document.visibilityState === "visible") {
			var network = kiwi.state.getActiveNetwork();
			var nick = event.nick
			var chan = event.channel
			//var mychans = kiwi.state.getActiveNetwork().buffers.filter((b) => b.isChannel()).map((b) => b.name);

			var ask = confirm('Hey! ' + nick + ' heeft u uitgenodigd voor ' + chan + ' \n\nWilt u dit kanaal toetreden??');
			
			if (!ask) { return; }
			
			kiwi.state.getOrAddBufferByName(network.id, chan);
			kiwi.state.setActiveBuffer(network.id, chan); 
			network.ircClient.join(chan);
		}
	});
});