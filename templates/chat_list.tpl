                    <h3 class="content-header-title mb-0 d-inline-block">Je Chatboxen</h3>
                    <div class="breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            
                        </div>
                    </div>
                </div>
                
            </div>
				<div class="content-body">
            
			
		<section id="configuration">
					<div class="row">
                        <div class="col-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title white">Chatbox lijst</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
											{if isset($success2)}
											<div class="alert alert-success border-0 alert-dismissible mb-2" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<!-- <script src="{$fullurl}/js/copyclipboard.js?v=2" type="text/javascript"></script> -->
											
												{literal}<script>
												// `clipboard` is defined on the global `window` object.
												function copy() {
													clipboard.writeText("/cs register #{/literal}{$chatname}{literal}");
												}
												</script>{/literal}
											<h4 class="alert-heading mb-2"><strong>Gelukt!</strong> #{$chatname} is opgeslagen!</h4>
											<p>{$success2} <br /><pre><code>/cs register #{$chatname}</code></pre></p>
											<button onclick="copy()" type="button" class="btn btn-primary">Kopieer commando!</button>
											<!-- {$success2} /cs register #{$chatname} -->
											</div>
											{/if}
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text white">{if isset($success2)}<br /><br /><br /><br /><br /><br />{/if}Hier vind je al je chatboxen die jij gemaakt hebt</p>
                                        <div class="table-responsive">
										{if {$ids|@count} > 0}
                                            <table id="data-table2" class="table compact table-hover">
												<thead>
													<tr style="align:center;">
														<th style="vertical-align:middle"><strong><center>ID</center></strong></th><th style="vertical-align:middle"><center><strong>Naam</strong></center></th><th style="vertical-align:middle"><strong><center>Achtergrond</center></strong></th><th style="vertical-align:middle"><strong><center>Style</center></strong></th>{if isset($god)}<th style="vertical-align:middle"><strong><center>Video Kwaliteit</center></strong></th><th style="vertical-align:middle; align:left;"><strong><center>Eigenaar</center></strong></th><th style="vertical-align:middle"><center><strong>Aantal keer bezocht</strong></center></th><th style="vertical-align:middle"><center><strong>Laatst bezocht</strong></center></th>{/if}<th style="vertical-align:middle"><strong><center>Chat</center></strong></th><th style="vertical-align:middle"><strong><center>Chat Opties</center></strong></th>
													</tr>
												</thead><tbody>

												{section name=chat loop=$ids}
         
												<tr style="align:center;">
													<td style="vertical-align:middle"><center><span class="badge badge-pill bg-info float-right"><center>{$ids[chat]}</center></span></center></td>
													<td style="vertical-align:middle"><center><p class="white">{$names[chat]}</p></center></td>
													<td style="vertical-align:middle">{if $bgurl[chat] != ""}<center><img src="{$bgurl[chat]}" style="border-radius: 50% 50% 50% 50%;height:50px;width:50px;"></center>{else}<center><div style="padding:10px 0;text-align:center;vertical-align:middle;background-color:{$bgcolor[chat]};color:#FFF;border-radius: 50% 50% 50% 50%;height:50px;width:50px;">{$chatstyle[chat]}</div></center>{/if}</td>
													<td style="vertical-align:middle"><center><div style="padding:10px 0;text-align:center;vertical-align:middle;background-color:{if $chatstyle[chat] == "html5color"}{$html5_color[chat]}{else}{$bgcolor[chat]}{/if};color:#FFF;border-radius: 50% 50% 50% 50%;height:50px;width:50px;">{$chatstyle[chat]}</div></center></td>
													{if isset($god)}
													<td style="vertical-align:middle"><center><p class="white">{$videoheight[chat]}p</p></center></td>
													<td style="vertical-align:middle; align:left;"><center><p class="white">{$owners[chat]}</p></center></td>
													<!-- <td style="vertical-align:middle"><center><p class="white">{$playerstyle[chat]}</p></center></td> -->
													<td style="vertical-align:middle"><center><p class="white">{$calls[chat]}</p></center></td>
													<td style="vertical-align:middle" data-order="{$lastcalleds[chat]}"><center><p class="white">{$lastcalleds[chat]|date_format:"%A, %e %B, %Y %H:%M:%S"}</p></center></td>
													{/if}
													<td style="vertical-align:middle"><center>
													<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
														<a href="{$fullurl}/chat/{$ids[chat]}" target='_blank' title="Preview Webchat" class="btn btn-outline-info"><span class="ft-share"></span></a>
														<!-- <a href="{$fullurl}/html5.php?id={$ids[chat]}" target="_blank" title="Preview HTML5" class="btn btn-outline-info"><span class="ft-chrome"></span></a>
														<a href="{if !$names[chat]|strstr:'.'}https://{$names[chat]}.chameleon.chattersworld.nl/{else}https://chameleon.chattersworld.nl/chat/{$ids[chat]}{/if}" target="_blank" title="Preview short link" class="btn btn-outline-info"><span class="ft-external-link"></span></a> -->
													</div></center>
														
													</td>
													<td style="vertical-align:middle"><center>
													<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">   
														<a href="{$fullurl}/edit/{$ids[chat]}" title="Bewerk Webchat" class="btn btn-outline-info"><span class="ft-settings"></span></a>
														<a href="{$fullurl}/transfer/{$ids[chat]}" title="Transfer Webchat" class="btn btn-outline-info"><span class="ft-repeat"></span></a>
														
														</div>
														<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
														<a href="#" id="custom-html" title="HTML codes Webchat" class="btn btn-outline-info" data-toggle="modal" data-target="#apiToolkit{$ids[chat]}"><span class="ft-link"></span></a>
														<!-- <a href="{$fullurl}/chanregister.php?id={$ids[chat]}&login={$login}&channel={$names[chat]}" title="Registreer {$names[chat]}" class="btn btn-outline-info"><span class="ft-slack"></span></a> -->
														<a href="{$fullurl}/del/{$ids[chat]}" title="Verwijder Webchat" class="btn btn-outline-danger"><span class="ft-trash-2"></span></a>
													</div></center>
													</td>
												</tr>

												<!-- Chatbox HTML Codes -->
												<div class="modal fade" id="apiToolkit{$ids[chat]}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content bg-blue-grey bg-darken-4">
															<div class="modal-header">
																	<h4 class="modal-title white" id="myModalLabel">Chatbox HTML codes</h4>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															</div>
															<div class="modal-body">
																<h5 class="white">Je chatbox op je website plaatsen</h5>
																Als je je chatbox op je website wil plaatsen, kan je dit doen met het volgende stukje HTML code:
																<pre><code class="language-markup">&lt;iframe src='{$fullurl}/chat/{$ids[chat]}' allow="camera;microphone" width='710' height='500' framespacing='0' frameborder='no' scrolling='no' &gt;&lt;/iframe&gt;</code></pre>
																<button onclick="copycode{$ids[chat]}()" type="button" class="btn btn-primary">Kopieer code!</button>
											
																	{literal}<script>
																	// `clipboard` is defined on the global `window` object.
																	function copycode{/literal}{$ids[chat]}{literal}() {
																		clipboard.writeText("<iframe src='https://chameleon.chattersworld.nl/chat/4240' allow='camera;microphone' width='710' height='500' framespacing='0' frameborder='no' scrolling='no' ></iframe>");
																	}
																	</script>{/literal}
																<br />
																<h5 class="white">Het aantal chatters op je website laten zien</h5>
																Om het aantal chatters dat zich in je chatbox bevindt op je site weer te geven, plaats je het volgende stukje javascript code tussen de <code>&lt;HEAD&gt;</code> tags van je webpagina.
																<pre><code class="language-js">&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(function updateChatCount() {
	$.get('https://chattersworld.nl/usercount.php?channel={$names[chat]}', function(data) {
		$("#users").html(data);
	}, 'text');
	setTimeout(updateChatCount, 3000);
});
&lt;/script&gt;</code></pre>									
																
																Zet vervolgens tussen de <code>&lt;BODY&gt;</code> tags op de plaats waar je het chattersaantal wil hebben een HTML-element met het id users, bijvoorbeeld:
																<pre><code class="language-markup">&lt;p&gt;Aantal Chatters: &lt;span id="users"&gt;&lt;/span&gt;&lt;/p&gt;</code></pre>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>

										{/section}
											
											</tbody>
									</table>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                
                <!--/ Zero configuration table -->

<!-- End -->

		
    {else}
        <a href="{$fullurl}/new" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Nieuwe chatbox aanmaken</a>
    {/if}

</div>
</div>
</div>
