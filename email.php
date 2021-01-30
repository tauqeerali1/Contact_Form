<?php include 'email_form.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Send an Email</title>

	</head>
<body>

	<?php echo $alert; ?>


	<center>
		 <div class="contact-section">
		 	<div class="contact-form">
		<form class="contact" action="" method="post">
			<h2>Send an Email</h2>
			<label>Name</label>
			<input name="name" type="text" placeholder="Enter Name">
			<br><br>
			<label>Email</label>
			<input name="email" type="text" placeholder="Enter Email" required>
			<br><br>
			<p>Message</p>
			<textarea name="message" rows="5" placeholder="Type Message"></textarea>
			<br><br>
			<button type="submit" name="submit" class="send-btn" value="Send">Submit</button>
		</form>
	</div>
	</div>
	</center>
	
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>	
</body>
</html>
