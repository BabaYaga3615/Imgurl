<?php
$title="Inscription";
$mono_style=".panel-heading h3{margin:0;} #conversation{overflow-x: hidden;overflow-y: scroll;  }";
include('inc/header.php');
?>
	<div class="container">
		<?php
/* $_SESSION['Pseudo'] */
			if(isset($_SESSION['connect']))
			{
				?>
		<div class="col-lg-12">
				<div style="magin:0;"  class="panel panel-default">
				  <div class="panel-heading"><h3 class="text-center">Chatbox</h3></div>
					<table id="conversation"  class="table table-hover table-striped table-condensed">

				
					  	</table>
					
				<div class="panel-footer">
					<form action="#" method="post">
					<label for="message">Votre Message:</label>
        			<input type="text" id="message" class="form-control">
						<button style="margin-top: 5px;" type="submit" class="btn btn-sm btn-primary col-lg-offset-11" id="envoyer" title="Envoyer" >Envoyer</button>
					</form>
					
					
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	
				<script>
				  $(function() {
					afficheConversation();
					$('#envoyer').click(function() {
						
						var message = $('#message').val();
						 $('#message').val('');
						$.post('chat_post.php', { 'message': message }, function() {
						  afficheConversation;
						});

					});

					function afficheConversation() {
					  $('#conversation').load('msg.htm');
					  $('#message').focus();
					 

					}
					setInterval(afficheConversation, 4000);
				  });
				</script>
					
					
					</div>
				<?php
				}
				else
				{
					echo '<div class="alert alert-danger col-lg-12 text-center" role="alert"><strong>Vous devez êtres connecter pour pouvoir accéder à cette page !</strong></div>';
				}
				?>
		</div>

		
	 </div>