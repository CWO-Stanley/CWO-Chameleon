<header class="content__title">
                    <h1>CHATBOXEN</h1>

                    
                </header>
<div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <h6 class="card-subtitle">Hier vind je al jouw gemaakte chatboxen terug, die je kan bewerken verwijderen en nog veel meer.</h6>
						<div class="table-responsive data-table">
    {if {$ids|@count} > 0}
    <table id="data-table2" class="table">
	<thead>
        <tr>
            <td><strong>ID</strong></td><td><strong>Achtergrond</strong></td><td><strong>Style</strong></td><td><strong>Naam</strong></td>{if isset($god)}<td><strong>Eigenaar</strong></td><td><strong>Speler</strong></td><td><strong>Aantal keer bezocht</strong></td><td><strong>Laatst bezocht</strong></td>{/if}<td><strong>Chat/HTML5</strong></td><td><strong>Chat Opties</strong></td>
        </tr>
	</thead><tbody>

        {section name=chat loop=$ids}
         
			<tr>
                <td style="vertical-align:middle"><span class="badge">{$ids[chat]}</span></td>
				<td style="vertical-align:middle">{if $bgurl[chat] != ""}<center><img src="{$bgurl[chat]}" style="border-radius: 50% 50% 50% 50%;height:50px;width:50px;"></center>{else}<center><div style="padding:10px 0;text-align:center;vertical-align:middle;background-color:{$bgcolor[chat]};color:#FFF;border-radius: 50% 50% 50% 50%;height:50px;width:50px;">{$chatstyle[chat]}</div></center>{/if}</td>
				<td style="vertical-align:middle"><center><div style="padding:10px 0;text-align:center;vertical-align:middle;background-color:{$bgcolor[chat]};color:#FFF;border-radius: 50% 50% 50% 50%;height:50px;width:50px;">{$chatstyle[chat]}</div></center></td>
				<td style="vertical-align:middle">{$names[chat]}</td>
				{if isset($god)}
				<td style="vertical-align:middle">{$owners[chat]}</td>
				<td style="vertical-align:middle">{$playerstyle[chat]}</td>
				<td style="vertical-align:middle">{$calls[chat]}</td>
				<td style="vertical-align:middle" data-order="{$lastcalleds[chat]}">{$lastcalleds[chat]|date_format:"%A, %e %B, %Y %H:%M:%S"}</td>
				{/if}
                <td style="vertical-align:middle">
                    <a href="{$fullurl}/chat.php?id={$ids[chat]}" target='_blank' title="Preview Webchat" class="btn btn-light btn--icon"><i class="zwicon-eye"></i></a>
                    <a href="{$fullurl}/html5.php?id={$ids[chat]}" target="_blank" title="Preview HTML5" class="btn btn-light btn--icon"><i class="zmdi zmdi-language-html5"></i></a>
                    
                </td>
				<td style="vertical-align:middle">
                    
                    <a href="{$fullurl}/edit/{$ids[chat]}" title="Bewerk Webchat" class="btn btn-light btn--icon"><i class="zwicon-cog"></i></a>
                    <a href="{$fullurl}/transfer/{$ids[chat]}" title="Transfer Webchat" class="btn btn-light btn--icon"><i class="zwicon-loop"></i></a>
					
                    <a href="#" title="HTML codes Webchat" class="btn btn-light btn--icon" data-toggle="modal" data-target="#apiToolkit{$ids[chat]}"><i class="zwicon-script"></i></a>
					<a href="{$fullurl}/chanregister.php?id={$ids[chat]}&login={$login}&channel={$names[chat]}" title="Registreer {$names[chat]}" class="btn btn-light btn--icon"><i class="zmdi zmdi-playlist-plus"></i></a>
                    <a href="{$fullurl}/del/{$ids[chat]}" title="Verwijder Webchat" class="btn btn-danger btn--icon"><i class="zwicon-trash"></i></a>
                </td>
            </tr>

            <!-- Chatbox HTML Codes -->
            <div class="modal fade" id="apiToolkit{$ids[chat]}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Chatbox HTML codes</h4>
                        </div>
                        <div class="modal-body">
                            <h5>Je chatbox op je website plaatsen</h5>
                            Als je je chatbox op je website wil plaatsen, kan je dit doen met het volgende stukje HTML code:
                            <blockquote><pre class="text-left">&lt;iframe src='{$fullurl}/chat.php?id={$ids[chat]}' width='710' height='500' framespacing='0' frameborder='no' scrolling='no' &gt;&lt;/iframe&gt;</pre></blockquote>
							<h5>Je HTML5 chatbox op je website plaatsen</h5>
                            Als je je HTML5 chatbox op je website wil plaatsen, kan je dit doen met het volgende stukje HTML code:
                            <blockquote><pre class="text-left">&lt;iframe src='{$fullurl}/html5.php?id={$ids[chat]}' width='710' height='500' framespacing='0' frameborder='no' scrolling='no' &gt;&lt;/iframe&gt;</pre></blockquote>

                            <h5>Het aantal chatters op je website laten zien</h5>
                            Om het aantal chatters dat zich in je chatbox bevindt op je site weer te geven, plaats je het volgende stukje javascript code tussen de <code>&lt;HEAD&gt;</code> tags van je webpagina.
<blockquote><pre class="text-left">&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
  $(document).ready(function() {
    $.get('https://chattersworld.nl/usercount.php?channel={$names[chat]}', function(data) {
      $("#users").html(data);
    }, 'text');
});
&lt;/script&gt;</pre></blockquote>
                            Zet vervolgens tussen de <code>&lt;BODY&gt;</code> tags op de plaats waar je het chattersaantal wil hebben een HTML-element met het id users, bijvoorbeeld:
                            <blockquote><pre class="text-left">&lt;p&gt;Aantal Chatters: &lt;span id="users"&gt;&lt;/span&gt;&lt;/p&gt;</pre></blockquote>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        {/section}
		
		</tbody>
    </table>
		
    {else}
        <a href="{$fullurl}/new" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Nieuwe chatbox aanmaken</a>
    {/if}

</div></div></div>
