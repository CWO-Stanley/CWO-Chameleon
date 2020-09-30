{literal}
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').bootstrapSwitch();
        $('input').tooltip({placement:'auto',animation:true});
        $('label').tooltip({placement:'auto',animation:true});
        $("#myTab a").click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        });
    });
</script>
{/literal}

<div class="card">
<div class="card-body">

    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opgelet!</strong> Als je je chatbox aan iemand anders overdraagt, kan jij hier geen aanpassingen meer aan doen!
    </div>
    
    <form role="form" method="post" action="{$fullurl}/transfer">
        <input type="hidden" name="chat_id" value="{$chat_id}" />
        <div class="tab-content">
            <!-- ALGEMENE INSTELLINGEN -->
            <div class="tab-pane active fade show" id="algemeen" role="tabpanel">
                <!-- Naam van de chatbox -->
				<div class="form-group">
					<script type="text/javascript">

				function CheckSpace(event)
				{literal}{
					if(event.which ==32)
					{
						event.preventDefault();
						return false;
					}
				}{/literal}
				</script>
                        <div class="row">
                      <label class="col-sm-2 col-form-label" for="firstname">Gebruikersnaam:</label>
						<div class="col-sm-10">
							<div class="form-group">
                            <input type="text" class="form-control" name="username" title="Gebruikersnaam naar wie de chat word overgedragen." placeholder="Gebruikersnaam" data-toggle="tooltip" data-placement="top" required>
                        </div>
                    </div>
				</div>
					

                </div>
            </div>
        </div>
        <br /><br />
        <button class="btn btn-primary" type="submit">Draag chat over</button>
    </form>
    
    

</div>
