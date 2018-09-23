	<div id="f">
		<div class="container">
			<div class="row">
				<h3>CONTACT US</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				<div class="col-lg-6 col-lg-offset-3">
					<p><u>Address</u><br/>Deshbandhu Nagar, Baguiati<br/>Kolkata, India<br/><u>Mobile</u><br/>+91 8981408988<br/><u>Email</u><br/>abhijeet.karmaker@techzonepvtltd.com</p>
					<p><a href="#form" class="btn btn-warning" data-toggle="modal" style="height:35px;">YEAH!CONTACT US NOW!</a></p>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Contact Modal -->
	<div class="modal fade" id="form" role = "dialog">
		<div class="modal-dialog" style="padding-top:.5cm">
			<div class="modal-content">
				<div class="modal-header">
					<h2> Contact Us </h2>
						Please let us know about your requirement & we will get back to you as soon as possible. Thank You.
				</div>
				
				<script>
				function myFunction() {
					document.getElementById("myForm").reset();
					}
				</script>
				
				<form action="./includes/contact.php" id="myForm" class="send" data-toggle="validator" role="form" method="post">
							<div class="modal-body">
									<div class="form-group">
										<label for="yourname" class="control-label">Name:</label>
										<input type="text" class="form-control" id="yourname" name="yourname" placeholder="Name" required autofocus>
									</div>
									<div class="form-group">
										<label for="subject" class="control-label">Subject:</label>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
									</div>
									<div class="form-group">
										<label for="email" class="control-label">Email:</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label for="phone" class="control-label" for="phone">Mobile:</label>
										 <input class="form-control" id="phone" name="phone" placeholder="9XXXXXXXXX" type="text" required>
									</div>
									<div class="form-group">
										<label for="comments" class="control-label">Your Comments:</label>
										<textarea class="form-control" id="comments" name="comments" required> </textarea>
									</div>
				</div>
				
			<div class="modal-footer">
					<button class="btn btn-primary" type="submit" name='send' onlcick="myFunction()">SEND</button>
					<button class="btn btn-danger" data-dismiss="modal">CLOSE</button>
				</div>
				</form>

			</div>
		</div>
	</div><!--f-->
	
	

